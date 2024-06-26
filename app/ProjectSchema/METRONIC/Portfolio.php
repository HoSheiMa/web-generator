<?php



namespace App\ProjectSchema\METRONIC;


use \App\Core\Classes\Builder;
use App\Core\Classes\Schema;
use App\Models\Project;

class Portfolio implements ProjectSchemaInterface
{
    public function __construct(public Project $project)
    {
    }
    public function build($content, $replace_schema)
    {
        $builder = new Builder($this->project);
        return $builder->setContent($content)->build(
            Schema::matchSchema(
                $this->getSchema(),
                $replace_schema
            )
        );
    }

    public function getSchema()
    {
        return [
            "home" => [
                [
                    'name' => "navbar",
                    "visible" => true,
                    "navbar_title" => "google dogs.com",
                    "navbar_menulinks" => [
                        [
                            "title" => "Home",
                            "link" => "./home.php",
                        ],
                        [
                            "title" => "Features",
                            "link" => "./features.php",
                        ],
                        [
                            "title" => "Demos",
                            "link" => "./demos.php",
                        ],
                        [
                            "title" => "Pricing",
                            "link" => "./pricing.php",
                        ],
                        [
                            "title" => "Faqs",
                            "link" => "./faqs.php",
                        ],
                        [
                            "title" => "Clients",
                            "link" => "./clients.php",
                        ],
                        [
                            "title" => "Contact",
                            "link" => "./contact.php",
                        ],
                    ],
                    // home-start
                    "title" => "Ubold is a fully featured premium admin template",
                    "details" =>
                    "Ubold is a fully featured premium admin template built on top of awesome Bootstrap 4.4.1, modern web technology HTML5, CSS3 and jQuery. It has many ready to use hand crafted components.",
                    "background_image" => null,
                    "background_color" => null,
                    "sub_images" => [],
                    "auto_generate" => true,
                    // clients
                    "visible" => true,
                    "urls" => [],
                ],
                [
                    'name' => 'features',
                    "visible" => true,
                    "title" => "The admin is fully responsive and easy to customize",
                    "details" =>
                    "The clean and well commented code allows easy customization of the theme.It's designed for describing your app, agency or business.",
                    "items" => [
                        [
                            "icon_url" => "./theme/media/illustrations/sketchy-1/2.png",
                            "title" => "Responsive Layouts",
                            "details" =>
                            "Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit",
                        ],
                        [
                            "icon_url" => "./theme/media/illustrations/sketchy-1/4.png",
                            "title" => "Based on Bootstrap UI",
                            "details" =>
                            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium",
                        ],
                        [
                            "icon_url" => "./theme/media/illustrations/sketchy-1/8.png",
                            "title" => "Creative Design",
                            "details" =>
                            "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis",
                        ],
                        [
                            "icon_url" => "./theme/media/illustrations/sketchy-1/12.png",
                            "title" => "Awesome Support",
                            "details" =>
                            "At solmen va esser necessi far uniform grammatica pronun e plu sommun paroles.",
                        ],
                        [
                            "icon_url" => "./theme/media/illustrations/sketchy-1/3.png",
                            "title" => "Easy to customize",
                            "details" =>
                            "If several languages coalesce the grammar of the is more simple languages.",
                        ],
                        [
                            "icon_url" => "./theme/media/illustrations/sketchy-1/1.png",
                            "title" => "Quality Code",
                            "details" =>
                            "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis",
                        ],
                    ],
                ],
                [
                    'name' => 'demos',
                    'more_demos_button_visible' => true,
                    'more_demos_button_url' => '/demos',
                    "visible" => true,
                    'title' => "Available dogs Place",
                    'details' => "Available dogs Places in our small systme for rent.",
                    'demos' => [
                        [
                            'title' => 'light Place z-1',
                            'image_url' =>
                            'https://foyr.com/learn/wp-content/uploads/2021/08/design-your-dream-home.jpg',
                        ],
                        [
                            'title' => 'light Place zff-3',
                            'image_url' =>
                            'https://foyr.com/learn/wp-content/uploads/2021/08/design-your-dream-home.jpg',
                        ],
                        [
                            'title' => 'light Place c4-3',
                            'image_url' =>
                            'https://foyr.com/learn/wp-content/uploads/2021/08/design-your-dream-home.jpg',
                        ],
                    ],
                ],
                [
                    'name' => 'demos',
                    'more_demos_button_visible' => true,
                    'more_demos_button_url' => '/demos',
                    "visible" => true,
                    'title' => "Available dogs Place",
                    'details' => "Available dogs Places in our small systme for rent.",
                    'auto_generate' => true,
                    'max_auto_generate_items' => 9,
                ],
                [
                    'name' => "footer",
                    "visible" => true,
                    'footer_title' => "google dogs.com",
                    'title' => "A Responsive Bootstrap 4 Web App Kit",
                    "details" => "Ubold is a fully featured premium admin template built on top of
                            awesome Bootstrap 4.1.3, modern web technology HTML5, CSS3 and
                            jQuery.",
                    "footer_menulinks" => [
                        [
                            "title" => "Home",
                            "link" => "./home.php",
                        ],
                        [
                            "title" => "Features",
                            "link" => "./features.php",
                        ],
                        [
                            "title" => "Demos",
                            "link" => "./demos.php",
                        ],
                        [
                            "title" => "Pricing",
                            "link" => "./pricing.php",
                        ],
                        [
                            "title" => "Faqs",
                            "link" => "./faqs.php",
                        ],
                        [
                            "title" => "Clients",
                            "link" => "./clients.php",
                        ],
                        [
                            "title" => "Contact",
                            "link" => "./contact.php",
                        ],
                    ],
                    'facebook' => "/",
                    'twitter' => "/",
                    'instagram' => "/",
                    'facebook' => "/",
                ]
            ],
            'contact' => [
                [
                    'name' => "navbar",
                    "visible" => true,
                    "navbar_title" => "google",
                    "navbar_menulinks" => [
                        [
                            "title" => "Home",
                            "link" => "./home.php",
                        ],
                        [
                            "title" => "Features",
                            "link" => "./features.php",
                        ],
                        [
                            "title" => "Demos",
                            "link" => "./demos.php",
                        ],
                        [
                            "title" => "Pricing",
                            "link" => "./pricing.php",
                        ],
                        [
                            "title" => "Faqs",
                            "link" => "./faqs.php",
                        ],
                        [
                            "title" => "Clients",
                            "link" => "./clients.php",
                        ],
                        [
                            "title" => "Contact",
                            "link" => "./contact.php",
                        ],
                    ],
                    // home-start
                    "title" => "Ubold is a fully featured premium admin template",
                    "details" =>
                    "Ubold is a fully featured premium admin template built on top of awesome Bootstrap 4.4.1, modern web technology HTML5, CSS3 and jQuery. It has many ready to use hand crafted components.",
                    "background_image" => null,
                    "background_color" => null,
                    "sub_images" => [],
                    "auto_generate" => true,
                    // clients
                    "visible" => true,
                    "urls" => [],
                ],
                [
                    'name' => "contactus",
                    "visible" => true,
                    'email' => "example@abc.com",
                    'phone' => "012-345-6789",
                    'address' => "4413 Cairo, Egypt",
                    'title' => "Have any Questions ?",
                    'details' => "Please fill out the following form and we will get back to you shortly",
                ],
                [
                    'name' => "footer",
                    "visible" => true,
                    'footer_title' => "google dogs.com",
                    'title' => "A Responsive Bootstrap 4 Web App Kit",
                    "details" => "Ubold is a fully featured premium admin template built on top of
                            awesome Bootstrap 4.1.3, modern web technology HTML5, CSS3 and
                            jQuery.",
                    "footer_menulinks" => [
                        [
                            "title" => "Home",
                            "link" => "./home.php",
                        ],
                        [
                            "title" => "Features",
                            "link" => "./features.php",
                        ],
                        [
                            "title" => "Demos",
                            "link" => "./demos.php",
                        ],
                        [
                            "title" => "Pricing",
                            "link" => "./pricing.php",
                        ],
                        [
                            "title" => "Faqs",
                            "link" => "./faqs.php",
                        ],
                        [
                            "title" => "Clients",
                            "link" => "./clients.php",
                        ],
                        [
                            "title" => "Contact",
                            "link" => "./contact.php",
                        ],
                    ],
                    'facebook' => "/",
                    'twitter' => "/",
                    'instagram' => "/",
                    'facebook' => "/",

                ]
            ]
        ];
    }
}
