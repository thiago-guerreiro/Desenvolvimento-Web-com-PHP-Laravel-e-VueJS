<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor Teste';
        $fornecedor->site = 'fornecedorteste.com.br';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'fornecedorteste@email.com';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Teste Fornecedor',
            'site' => 'testefornecedor.com.br',
            'uf' => 'SP',
            'email' => 'testefornecedor@email.com'
        ]);

        DB::table('fornecedores')->insert([
            'nome' => 'Teste Teste',
            'site' => 'teste.com.br',
            'uf' => 'SP',
            'email' => 'teste@email.com'
        ]);
    }
}
