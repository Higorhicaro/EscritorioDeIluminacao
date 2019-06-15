<?php

use Illuminate\Database\Seeder;

class ProjetoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert([
            [
                'nome' => 'ENOTEL ACQUA CLUB',
                'cidade' => 'PORTO DE GALINHAS',
                'estado' => 'PE',
                'foto' => 'enotel2.png',
                'descricao' => 'ILUMINANDO A BELEZA DO NORDESTE'
            ],
            [
                'nome' => 'PRAÇA RAMOS DE AZEVEDO',
                'cidade' => 'SÃO PAULO',
                'estado' => 'SP',
                'foto' => '16015541.jpeg',
                'descricao' => 'LUMINÁRIA LAMPIÃO LED, EM LUGAR DE DESTAQUE EM SÃO PAULO, COMPROVANDO A EFICÁCIA DESTA SOLUÇÃO NA VERSÃO LED.'
            ],
            [
                'nome' => 'PRAIA BRAVA',
                'cidade' => 'ITAJAÍ',
                'estado' => 'SC',
                'foto' => 'DSC01226.jpg',
                'descricao' => 'MARGINAL DA PRAIA BRAVA EM ITAJAI, SANTA CATARINA.'
            ],
            [
                'nome' => 'PALÁCIO DOS BANDEIRANTES',
                'cidade' => 'SÃO PAULO',
                'estado' => 'SP',
                'foto' => 'palacio-governo.jpg',
                'descricao' => 'PALÁCIO DOS BANDEIRANTES COM NOVO BRILHO.'
            ],
            [
                'nome' => 'PONTE NEWTON NAVARRO',
                'cidade' => 'NATAL',
                'estado' => 'RN',
                'foto' => '3868260449_715b2c2e1a_b.jpg',
                'descricao' => 'CARTÃO POSTAL DE NATAL.'
            ],
            [
                'nome' => 'AEROPORTO DE SÃO GONÇALO',
                'cidade' => 'SÃO GONÇALO DO AMARANTE',
                'estado' => 'RN',
                'foto' => 'Aeroporto-de-Natal-e1460495600106-1.jpg',
                'descricao' => 'UMA NOVA ESTRUTURA PARA OS VISITANTES DO RN'
            ],
        ]);
    }
}
