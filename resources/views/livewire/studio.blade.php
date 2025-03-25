<div style="overflow: hidden">
    <div class="row bg-black" style="height:50px">
        <a href="/">
            <img alt="Logo" src="/metronic/media/logos/logoDashbord.png" class="mh-50px">
        </a>
    </div>
    <div class="row p-0 m-0" style="height:calc(100vh - 50px);overflow: hidden;">
        <div class="col-2 p-1 pt-3 rounded-2 h-100 bg-white pt-5" style="overflow: scroll">
            <div class="d-flex flex-column align-items-center ">
                <div class="d-flex justify-content-start w-100 p-3">
                    <button class="btn btn-icon btn-active-icon-warning" wire:click="back">
                        <i class="ki-duotone ki-arrow-left fs-xl-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                </div>
                <div class="d-flex justify-content-start w-100 px-4 mb-4">
                    <h3>
                        <strong>HOME</strong>
                    </h3>
                </div>

                @if ($page == null)
                    <div class="d-flex flex-column justify-content-start w-100 px-4">
                        <div class="d-flex justify-content-start w-100 mb-4">
                            <h3>Pages</h3>
                        </div>
                        @foreach ($project->pages as $project_page)
                            <div class="mb-3">
                                <div class="d-flex align-items-center bg-light-warning rounded p-3 ">
                                    <i class="ki-duotone ki-abstract-26 text-warning fs-1 me-5"><span class="path1"></span><span class="path2"></span></i>
                                    <!--begin::Title-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">{{ $project_page->page_name }}</a>
                                    </div>
                                    <button class="btn btn-sm   btn-icon btn-icon-warning " wire:click='viewUpdate("page","{{ $project_page->id }}" )'>
                                        <i class="ki-duotone ki-pencil fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <button class="btn btn-sm  btn-icon btn-icon-danger">
                                        <i class="ki-duotone ki-trash fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if ($page != null && $component == null)
                    <div class="d-flex justify-content-start w-100 px-4">
                        <h3>Components</h3>
                    </div>
                    <div id="example1" class="p-3 w-100" wire:ignore wire:key='key__{{ count($page->components) }}'>
                        @foreach ($page->components as $page_component)
                            <div class="mb-3">
                                <div class="d-flex align-items-center bg-light-warning rounded p-3 ">
                                    <i class="ki-duotone ki-abstract-26 text-warning fs-1 me-5"><span class="path1"></span><span class="path2"></span></i>
                                    <!--begin::Title-->
                                    <div class="flex-grow-1 me-2">
                                        <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-6">{{ $page_component->component_name }}</a>
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Lable-->
                                    <span class="fw-bold  py-1">
                                        <i class="text-black fs-xl-2 fa-solid fa-arrows-up-down-left-right"></i>
                                    </span>
                                    <!--end::Lable-->

                                </div>
                                <button wire:click="editComponent('{{ $page_component->id }}')" class="btn btn-sm   btn-icon btn-icon-warning ">
                                    <i class="ki-duotone ki-pencil fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                                <button wire:click="deleteComponent('{{ $page_component->id }}')" class="btn btn-sm  btn-icon btn-icon-danger">
                                    <i class="ki-duotone ki-trash fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if ($page != null && $component != null)
                    <h3>Component {{ $component->component_name }}</h3>
                    @foreach ($component->attributes as $attribute)
                        @switch($attribute->attribute_type)
                            @case('string')
                                @if (str_contains($attribute->attribute_name, 'image'))
                                    <div class="form-group w-100 p-3">
                                        <label class="form-label">{{ str_replace('_', ' ', strtoupper($attribute->attribute_name)) }}</label>
                                        <input wire:change='updateAttrValue({{ $component->id }}, {{ $attribute->id }}, event.target.value)'
                                            @if ($attribute->attribute_name == 'name') disabled @endif class="form-control" type="text" value="{{ $attribute->attribute_value }}">
                                        <div class="">
                                            <input wire:model="image" type="file" class="form-control mt-3 cp" name="" id="">
                                            <button wire:click="updateAttrValue({{ $component->id }}, {{ $attribute->id }})" class="btn btn-sm btn-primary mt-3">Upload</button>
                                        </div>
                                    </div>
                                @else
                                    <div class="form-group w-100 p-3">
                                        <label class="form-label">{{ str_replace('_', ' ', strtoupper($attribute->attribute_name)) }}</label>
                                        <input wire:change='updateAttrValue({{ $component->id }}, {{ $attribute->id }}, event.target.value)'
                                            @if ($attribute->attribute_name == 'name') disabled @endif class="form-control" type="text" value="{{ $attribute->attribute_value }}">
                                    </div>
                                @endif
                            @break

                            @case('boolean')
                                <div class="form-group w-100 p-3">
                                    <label class="form-label">{{ str_replace('_', ' ', strtoupper($attribute->attribute_name)) }}</label>
                                    <select class="form-select" wire:change='updateAttrValue({{ $component->id }}, {{ $attribute->id }}, event.target.value)' name=""
                                        id="">
                                        <option @if ($attribute->attribute_value == '1') selected @endif value="1">ON</option>
                                        <option @if ($attribute->attribute_value == '0') selected @endif value="0">OFF</option>
                                    </select>
                                </div>
                            @break

                            @case('array')
                                @php
                                    $_attr_arr = json_decode($attribute->attribute_value, true);
                                @endphp
                                @foreach ($_attr_arr as $attr_index => $attr)
                                    @if (gettype($attr) == 'string')
                                        <div class="form-group w-100 p-3">
                                            <label class="form-label">{{ str_replace('_', ' ', strtoupper($attribute->attribute_name . ' ' . $attr_index)) }}</label>
                                            <input wire:change='updateAttrValue({{ $component->id }}, {{ $attribute->id }}, event.target.value, {{ $attr_index }})'
                                                @if ($attribute->attribute_name == 'name') disabled @endif class="form-control" type="text" value="{{ $attr }}">
                                        </div>
                                    @elseif(gettype($attr) == 'array')
                                        @foreach ($attr as $attr_option_name => $attr_option_value)
                                            <div class="form-group w-100 p-3">
                                                <label class="form-label">{{ str_replace('_', ' ', strtoupper($attr_option_name . ' ' . $attr_index)) }}</label>
                                                <input
                                                    wire:change='updateAttrValue({{ $component->id }}, {{ $attribute->id }}, event.target.value, {{ $attr_index }}, "{{ $attr_option_name }}")'
                                                    @if ($attribute->attribute_name == 'name') disabled @endif class="form-control" type="text" value="{{ $attr_option_value }}">
                                            </div>
                                        @endforeach
                                    @endif
                                @endforeach
                            @break

                            @default
                        @endswitch
                    @endforeach
                @endif
            </div>
        </div>
        <div class="col-10 pt-3 " style="background-color: #edeff3  " wire:poll.1s>
            <div class="row">
                <div wire:key='btn1' class="col d-flex mx-3  px-5  justify-content-end">
                    <a wire:click="rebuild" class="btn btn-active-icon-danger btn-active-color-danger btn-active-light-danger btn-text-dark">
                        <i class="ki-duotone ki-graph-3 fs-1"><span class="path1"></span><span class="path2"></span></i>
                        Rebuild
                    </a>
                    <a href="/Outputs/{{ $project->id }}/home.php" class="btn btn-active-icon-danger btn-active-color-danger btn-active-light-danger btn-text-dark">
                        <i class="ki-duotone ki-graph-3 fs-1"><span class="path1"></span><span class="path2"></span></i>
                        Live View
                    </a>
                </div>
            </div>
            @if ($project->status == App\Core\Classes\Utils::READY)
                <iframe key={{ uniqid() }} class="w-100 h-100" style="transform: scale(0.9)" src="/Outputs/{{ $project->id }}/home.php?q={{ $project->updated_at }}"
                    frameborder="0"></iframe>
            @else
                <p class="card-text placeholder-glow col-12 w-100 h-100">
                    <span class="placeholder col-12 w-100 h-100" style="transform: scale(0.9)">
                    </span>
                </p>
            @endif

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>

    <script>
        window.onload = () => {
            Livewire.hook('element.updated', (event) => {
                setTimeout(() => {
                    let list = document.querySelector('#example1');
                    if (list && !list.hasAttribute('sortable')) {
                        console.log('handle sortable!!');
                        new Sortable(list, {
                            animation: 150,
                            ghostClass: 'blue-background-class',
                            onEnd: function(event) {
                                // console.log('event, ', event);
                                @this.call('updatePosition', event.oldIndex, event.newIndex)
                            }
                        });
                        list.setAttribute('sortable', 'true');
                    }
                }, 300);
            });
        };
    </script>

</div>
