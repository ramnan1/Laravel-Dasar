<?php

namespace App\Models;

class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Paly Ramnan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum animi recusandae consectetur qui tempora provident reprehenderit? Eius in maiores nobis blanditiis quo reiciendis placeat obcaecati totam pariatur rem, quas quae. Quas eius mollitia iste? Nisi aut quisquam incidunt quae optio, eveniet odio doloremque aperiam explicabo. Aliquid, architecto accusamus asperiores molestiae quis ducimus fugit necessitatibus rem aperiam eveniet explicabo ipsa officiis. Illo vitae labore consequatur adipisci in necessitatibus corporis dolorum aspernatur doloribus blanditiis nostrum cumque, obcaecati odio ducimus praesentium aperiam sint!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde eveniet omnis, iste qui commodi provident. Ullam, aut eum accusamus expedita sed quod corrupti hic laboriosam doloremque vel? Omnis, laborum illo. Ipsa repellat quis quos mollitia dignissimos maiores ullam voluptatum voluptatibus? Dicta dolores aliquam expedita nesciunt? Doloribus nisi eaque aperiam cum eos? Consequatur consectetur tenetur fugiat provident explicabo fuga, laborum autem perspiciatis. Velit voluptate consequuntur ad facilis nihil modi, non assumenda consectetur obcaecati eum libero aperiam, alias odit vero incidunt exercitationem repudiandae est quas quisquam adipisci dolorum laboriosam magni! Debitis amet adipisci nostrum quasi omnis sint neque ad voluptatibus quo laboriosam!"
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
