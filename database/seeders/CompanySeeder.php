<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Company::factory()
            // ->has(\App\Models\Quotation::factory()->count(3))
            ->createMany([
                [
                    'name' => 'INGENIEROS ELECTROMECANICOS SA',
                    'ruc' => '20282818036',
                    'address' => 'CAL.MANUEL GONZALES OLAECHEA NRO. 299 URB. LIMATAMBO LIMA - LIMA - SAN ISIDRO',
                    'attention' => 'ARNOLD SALDAÑA',
                    'status' => 1,
                ],
                [
                    'name' => 'INCOTEC CIMENTACIONES DEL PERU SAC',
                    'ruc' => '20601415578',
                    'address' => 'AV. SAN BORJA NORTE NRO. 166 URB. SAN BORJA SUR (3 PISO) LIMA - LIMA - SAN BORJA',
                    'attention' => 'FRANZ MENDOZA',
                    'status' => 1,
                ],
                [
                    'name' => 'GALVEC PERU SAC',
                    'ruc' => '20548765561',
                    'address' => 'AV. SAN BORJA NORTE NRO. 166 DPTO. 301 URB. SAN BORJA SUR LIMA - LIMA - SAN BORJA',
                    'attention' => 'DANIEL MALQUI',
                    'status' => 1,
                ],
                [
                    'name' => 'SAEG PERU SA',
                    'ruc' => '20373008533',
                    'address' => 'CAL.CORONEL ANDRES REYES NRO. 338 URB. JARDIN (PISO 2) LIMA - LIMA - SAN ISIDRO',
                    'attention' => 'PABLO CAMPOS',
                    'status' => 1,
                ],
                [
                    'name' => 'MURO ANCLADO PERU SAC',
                    'ruc' => '20604207020',
                    'address' => 'MZA. 23 LOTE. 22 P.J. ARRIBA PERU LIMA - LIMA - SAN JUAN DE LURIGANCHO',
                    'attention' => 'SIN NOMBRE',
                    'status' => 1,
                ],
                [
                    'name' => 'TRIPLE A',
                    'ruc' => '20601875200',
                    'address' => 'AV. LOS QUECHUAS NRO. 1347 DPTO. 401 URB. PARQUE DE MONTERRICO LIMA - LIMA - ATE',
                    'attention' => 'SIN NOMBRE',
                    'status' => 1,
                ],
                [
                    'name' => 'MAKE SOLUTION PERU S.A.C',
                    'ruc' => '20601675693',
                    'address' => 'MZA. F LOTE. 7 COO. DE VIV. LOS MOLLES SEC LONGUERA BAJA LIMA - LIMA - SANTA ANITA',
                    'attention' => 'SIN NOMBRE',
                    'status' => 1,
                ],
                [
                    'name' => 'AURI TECHNIK E.I.R.L',
                    'ruc' => '20602738818',
                    'address' => 'PETIT THOUARS NRO. 1775 (INTERIOR 1402) LIMA - LIMA - LINCE',
                    'attention' => 'ING. JUAN CARLOS',
                    'status' => 1,
                ],
        ]);
    }
}
