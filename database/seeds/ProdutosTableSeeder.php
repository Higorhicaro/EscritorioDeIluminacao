<?php

use Illuminate\Database\Seeder;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            [
              'nome' => 'MYROS',
              'linha' => 'PROJETORES',
              'foto' => 'myros_aceso.jpg',
              'caracteristicas' => 'PROJETOR COM TECNOLOGIA LED INTEGRADA.'
            ],
            [
                'nome' => 'ORYS',
                'linha' => 'CÊNICA',
                'foto' => 'orys_aceso.jpg',
                'caracteristicas' => 'CORPO EM ALUMÍNIO INJETADO, ARO EM AÇO INOX AISI 316 E VIDRO TEMPERADO DE 10MM.'
            ],
            [
                'nome' => 'LINEWAY',
                'linha' => 'CÊNICA',
                'foto' => 'lineway_aceso.jpg',
                'caracteristicas' => 'CORPO EM POLICARBONATO DE ALTA RESISTÊNCIA UV E AÇO INOX.'
            ],
            [
                'nome' => 'VIVA',
                'linha' => 'VIÁRIA',
                'foto' => 'viva_aceso.jpg',
                'caracteristicas' => 'A LUMINÁRIA VIVA FOI DESENHADA PARA A ILUMINAÇÃO DE VIAS E AMBIENTES URBANOS.'
            ],
            [
                'nome' => 'EYE',
                'linha' => 'PROJETORES',
                'foto' => 'eye_aceso.jpg',
                'caracteristicas' => 'A LUMINÁRIA EYE FOI DESENHADA PARA A ILUMINAÇÃO DE GALPÕES INDUSTRIAIS.'
            ],
            [
                'nome' => 'GIRAFA',
                'linha' => 'DECORATIVA',
                'foto' => 'girafa_aceso.jpg',
                'caracteristicas' => 'IMPRESSIONA E MARCA A DIFERENÇA O DESIGN QUANDO É CONSEGUIDO.'
            ],
            [
                'nome' => 'FOSTERI',
                'linha' => 'DECORATIVA',
                'foto' => 'fosteri_aceso.jpg',
                'caracteristicas' => 'COM UM DESENHO CUIDADOSO E ATRATIVO, ENQUADRA-SE PERFEITAMENTE EM QUALQUER AMBIENTE.'
            ],
            [
              'nome' => 'APE',
              'linha' => 'DECORATIVA',
              'foto' => 'ape_aceso.jpg',
              'caracteristicas' => 'O MODELO DECORATIVO APE DISTINGUE QUALQUER ESPAÇO COM A BELEZA DAS SUAS LINHAS.'
           ] ,
        ]);
    }
}
