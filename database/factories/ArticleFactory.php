<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'      => $this->faker ->sentence($nbWords = 4, $variableNbWords = true) ,
            'category'   => $this->faker ->word() ,
            'author'     => $this->faker ->firstName($gender = null|'male'|'female') ,
            'short_text' => $this->faker ->paragraph($nbSentences = 3, $variableNbSentences = true),
            'full_text'  => $this->faker ->text($maxNbChars = 2000) ,
            'created_at' => $this->faker ->dateTime(),
            'updated_at' => $this->faker ->dateTime()
        ];
    }
}
