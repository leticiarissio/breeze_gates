<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'user_id' => 1,
                'title' => 'Bem-vindos à Comunidade!',
                'content' => 'Sejam bem-vindos! Estamos felizes em tê-los aqui conosco nesta nova plataforma.'
            ],
            [
                'user_id' => 1,
                'title' => 'Regras da Comunidade',
                'content' => 'Mantenham o respeito, evitem spam e sigam as diretrizes para um ambiente saudável.'
            ],
            [
                'user_id' => 1,
                'title' => 'Dicas para Novos Usuários',
                'content' => 'Completem o perfil, explorem as categorias e interajam com outros usuários!'
            ],
            [
                'user_id' => 2,
                'title' => 'Meu Primeiro Bug e Como o Resolvi',
                'content' => 'Passei 3 horas debugando um erro de sintaxe. Era só um ; esquecido!'
            ],
            [
                'user_id' => 2,
                'title' => 'Filme que Mudou Minha Perspectiva',
                'content' => 'Assisti Interestelar ontem. Chorei no final. Ciência e emoção puras.'
            ],
            [
                'user_id' => 2,
                'title' => 'Viagem Solo: Minha Primeira Vez',
                'content' => 'Fui pra Gramado sozinho. Melhor decisão! Conheci pessoas incríveis.'
            ],
            [
                'user_id' => 2,
                'title' => 'Por Que Deletei o Instagram',
                'content' => 'Estava viciado em scroll. Agora leio mais e durmo melhor. Vale a pena!'
            ]
        ];

        DB::table('posts')->insert($posts);
    }
}
