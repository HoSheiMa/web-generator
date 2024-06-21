<?php


namespace App\ProjectSchema\UBOLD;

use App\Core\Classes\Builder;
use App\Core\Classes\Schema;
use App\Models\Project;

class Ecommerce implements ProjectSchemaInterface
{
    public function __construct(public Project $project)
    {
    }
    public function build($content, $replace_schema)
    {
        // info(Schema::matchSchema(
        //     $this->getSchema(),
        //     $replace_schema
        // ), $replace_schema);
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
                    "enable_cart" => true,
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
                    'name' => 'product-cards',
                    "type" => "top",
                    "visible" => true,
                    "title" => "The Top products",
                    "details" =>
                    "ٌYou can find whatever new brands and products in that list",
                    "items" => [],
                ], [
                    'name' => 'product-cards',
                    "type" => "random",
                    "visible" => true,
                    "title" => "The Random Pick products",
                    "details" =>
                    "ٌYou can find whatever new brands and products in that list",
                    "items" => [],
                ], [
                    'name' => 'product-cards',
                    "type" => "recently",
                    "visible" => true,
                    "title" => "The Recently added products",
                    "details" =>
                    "ٌYou can find whatever new brands and products in that list",
                    "items" => [],
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
                    "enable_cart" => true,
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
            ],
            "cart" => [
                [
                    'name' => "navbar",
                    "visible" => true,
                    "enable_cart" => true,
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
                    'name' => "cart",
                    "visible" => true,
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
            "checkout" => [
                [
                    'name' => "navbar",
                    "visible" => true,
                    "enable_cart" => true,
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
                    'name' => "checkout",
                    "visible" => true,
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
            "orders" => [
                [
                    'name' => "navbar",
                    "visible" => true,
                    "enable_cart" => true,
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
                    'name' => "orders",
                    "visible" => true,
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
        ];
    }
}
