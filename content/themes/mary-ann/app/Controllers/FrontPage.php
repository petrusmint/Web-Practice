<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

    /**
     * @var int Excerpt page ID
     */
    private $excerptsPageId = 15;

    public function orderFields()
    {
        $result = get_post_meta($this->excerptsPageId, 'order_fields', true);

        if (!empty($result)) {
            return $result[0];
        }
    }

    private $excerptsPageId1 = 224;

    public function orderFields1()
    {
        $result = get_post_meta($this->excerptsPageId1, 'order_fields', true);

        if (!empty($result)) {
            return $result[0];
        }
    }

    private $excerptsPageId2 = 228;

    public function orderFields2()
    {
        $result = get_post_meta($this->excerptsPageId2, 'order_fields', true);

        if (!empty($result)) {
            return $result[0];
        }
    }

    private $excerptsPageId3 = 231;

    public function orderFields3()
    {
        $result = get_post_meta($this->excerptsPageId3, 'order_fields', true);

        if (!empty($result)) {
            return $result[0];
        }
    }

    public function bookReviews()
    {
        $args = [
          'posts_per_page'   => 12,
          'offset'           => 0,
          'orderby'          => 'date',
          'order'            => 'DESC',
          'post_type'        => 'book_reviews',
          'post_status'      => 'publish',
          'suppress_filters' => true,
        ];

        $posts = get_posts($args);

        $data = [];
        foreach ($posts as $post) {
            $data[] = [
              'category' => get_the_category($post->ID)[0]->cat_name,
              'title'   => $post->post_title,
              'content' => $post->post_content,
              'address' => get_post_meta($post->ID, 'address', true),
            ];
        }

        return $data;
    }
}