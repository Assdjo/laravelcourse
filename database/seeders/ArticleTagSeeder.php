<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = Article::all();
        $tags = Tag::pluck('id')->toArray();

        foreach ($articles as $article) {
            $randomTagIds = collect($tags)->random(rand(1, count($tags)))->toArray();
            $article->tags()->sync($randomTagIds);
        }
    }
}
