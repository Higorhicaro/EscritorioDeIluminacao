<?php

use Illuminate\Database\Seeder;

class RepresentantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('representantes')->insert([
            [
                'nome' => 'JOSÉ TRINDADE',
                'email' => 'josetrindade@gmail.com',
                'telefone' => '(81) 99880-7744',
                'cidade' => 'RECIFE',
                'estado' => 'PE',
                'foto' => 'rep01.jpg'
            ],
            [
                'nome' => 'SOLANGE PEREIRA',
                'email' => 'solange1988@gmail.com',
                'telefone' => '(84) 98833-5511',
                'cidade' => 'NATAL',
                'estado' => 'RN',
                'foto' => 'rep02.jpg'
            ],
            [
                'nome' => 'ALEXANDRE QUEIROZ',
                'email' => 'carlossilva.rep@hotmail.com',
                'telefone' => '(11) 98133-2233',
                'cidade' => 'SÃO PAULO',
                'estado' => 'SP',
                'foto' => 'rep03.jpg'
            ],
            [
                'nome' => 'MARIA CAVALCANTE',
                'email' => 'mcavalcante30@yahoo.com.br',
                'telefone' => '(21) 99911-4466',
                'cidade' => 'RIO DE JANEIRO',
                'estado' => 'RJ',
                'foto' => 'rep04.jpg'
            ],
        ]);
    }
}
