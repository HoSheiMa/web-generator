<?php

namespace App\Http\Livewire;

use App\Core\Classes\Builder;
use App\Core\Classes\Schema;
use App\Models\Attribute;
use App\Models\Component as ModelsComponent;
use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;

class Studio extends Component
{
    use WithFileUploads;

    public $project;
    public $page = null;
    public $component = null;
    // for image upload
    public $image;



    private function checkAccessLevel()
    {
    }

    public function viewUpdate($type, $id)
    {
        switch ($type) {
            case 'page':
                $this->page = Page::find($id);
                break;
            case 'component':
                $this->component = ModelsComponent::find($id);
                break;
        }
    }

    public function rebuild($focas = false)
    {
        if (!$focas) {
            $this->page = null;
            $this->component = null;
        }
        $this->project->refresh();
        $schema = Schema::databaseToJson($this->project);
        $builder = new Builder($this->project);
        $builder->build($schema);
    }

    public function back()
    {
        if ($this->component) {
            $this->component = null;
            return;
        }
        if ($this->page) {
            $this->page = null;
            return;
        }

        return redirect('/projects');
    }

    public function updatePosition($old_pos, $new_pos)
    {
        $page = $this->page;
        $components = $page->components;

        $components[$old_pos]->update(['order_in_list' => $new_pos]);
        $components[$new_pos]->update(['order_in_list' => $old_pos]);

        $this->rebuild(true);
    }
    public function deleteComponent($id)
    {
        $this->checkAccessLevel();
        \App\Models\Component::find($id)->delete();
        $this->rebuild(true);
    }
    public function editComponent(\App\Models\Component $id)
    {
        $this->checkAccessLevel();
        $this->component = $id;
    }

    public function updateAttrValue($component, $attribute, $value = null, $attr_index = null, $attr_option_name = null)
    {
        $this->checkAccessLevel();
        $attr = Attribute::find($attribute);


        if (str_contains($attr->attribute_name, 'image') && !$attr_index) {
            $path = $this->image->store('public/images');
            $path = "/" . str_replace("public", "storage", $path);
            $attr->update(['attribute_value' => $path]);
        } elseif ($attr_index && !$attr_option_name) {
            $old_value = json_decode($attr->attribute_value, true);
            $new_value = [...$old_value];
            $new_value[$attr_index] = $value;
            $attr->update(['attribute_value' => json_encode($new_value)]);
        } elseif ($attr_index && $attr_option_name) {
            $old_value = json_decode($attr->attribute_value, true);
            $new_value = [...$old_value];
            $new_value[$attr_index][$attr_option_name] = $value;
            $attr->update(['attribute_value' => json_encode($new_value)]);
        } else {
            $attr->update(['attribute_value' => $value]);
        }
        // rebuild and facos in same component
        $component_index = $this->component->order_in_list;
        $this->component = null;
        $this->rebuild(true);
        $this->page->refresh();
        $this->component = $this->page->components[$component_index];
    }
    public function render()
    {
        return view('livewire.studio');
    }
}
