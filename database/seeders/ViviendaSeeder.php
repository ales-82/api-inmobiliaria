<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vivienda;

class ViviendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vivienda::create([
            'direccion' => 'Aranguren al 500 Inmueble Para Vivienda Y Uso Profesional',
            'descripcion' => 'Vivienda de dos pisos que se unen por la escalera interna, entrada independiente para ambas unidades, El primer piso contiene 2 habitaciones amplias con placard incorporado completo con yacuzzi, el precio del inmueble puede ser modificado sin previo aviso, con expensas',
            'Barrio'=>'Caballito',
            'ciudad' => 'Capital Federal',
            'provincia' => 'Buenos Aires',
            'cantidad_ambientes' => 5,
            'habitaciones'=>3,
            'baño' => 2,
            'superficie' => 170,
            'tipo' => 'Casa',
            'estado' => 'disponible',
            'precio' => 250000,            
        ]);

        Vivienda::create([
            'direccion' => 'San jose al 1100',
            'descripcion' => 'Ideal para vivienda, pero tambien para su uso profesional o consultorio, atelier de artistias u oficina de empresa, Cocina comedor, en PA encontramos lavadero y habitación de servicio. Con expensas',
            'Barrio'=>'Monserrat',
            'ciudad' => 'Capital Federal',
            'provincia' => 'Buenos Aires',
            'cantidad_ambientes' => 5,
            //'habitaciones'=>'',
            'baño' => 2,
            'superficie' => 191,
            'tipo' => 'departamento',
            'estado' => 'disponible',
            'precio' => 295000,            
        ]);

        Vivienda::create([
            'direccion' => 'Olazabal 2727, Belgrano',
            'descripcion' => 'Vivienda y apto profesional, excelente departamento de 1 ambiente en PB, con salida al patio, cocina pequeña con anafe, calefon y un antiguedad de 31 años. Con expensas',
            'barrio'=>'Belgrano',
            'ciudad' => 'Capital Federal',            
            'provincia' => 'Buenos Aires',
            'cantidad_ambientes' => 1,
            //'habitaciones'=>'',
            'baño' => 1,
            'superficie' => 36,
            'tipo' => 'departamento',
            'estado' => 'disponible',
            'precio' => 70000,            
        ]);

        Vivienda::create([
            'direccion' => 'Avenida Rivadavia 6300',
            'descripcion' => 'idel vivienda o apto profesional, ubicado en la mejor zona de flores, dormitorio con placard de piso a techo, el 2do y el 3ro dormitorio tiene placares en el pasillo de distribución. La cocina esta reciclada con doble mesada, baño completo con bañera y toilette. Antiguedad 30 años y expensas',
            'barrio'=>'Flores',
            'ciudad' => 'Capital Federal',
            'provincia' => 'Buenos Aires',
            'cantidad_ambientes' => 4,
            'habitaciones'=>3,
            'baño' => 1,
            'superficie' => 60,
            'tipo' => 'departamento',
            'estado' => 'disponible',
            'precio' => 120000,            
        ]);

        Vivienda::create([
            'direccion' => 'Junin al 1500',
            'descripcion' => 'Junin entre las heras y pacheco de melo, recien reciclado, vivienda o apto profesional. Cocina integrada con conexion para lavarropas, Baño con ventilacion natural y calefon. Antiguedad 45 años, y expensas',
            'barrio'=>'Recoleta',
            'ciudad' => 'Capital Federal',
            'provincia' => 'Buenos Aires',
            'cantidad_ambientes' => 2,
            'habitaciones'=>1,
            'baño' => 1,
            'superficie' => 34,
            'tipo' => 'departamento',
            'estado' => 'disponible',
            'precio' => 95000,            
        ]);

        Vivienda::create([
            'direccion' => 'Uruguay al 900',
            'descripcion' => 'Para vivienda u oficina, edificio antiguo de categoria, antiguedad 70 años, es a reciclar. Esta ubicada cerca de la linea D estacion Tribunales. Se ingresa por un palier comun al salon principal, al ambiente principal y atraves de un pasil a la cocina  y los otros ambientes',
            'barrio'=>'Barrio Norte',
            'ciudad' => 'Capital Federal',
            'provincia' => 'Buenos Aires',
            'cantidad_ambientes' => 5,
            'habitaciones'=>4,
            'baño' => 1,
            'superficie' => 111,
            'tipo' => 'departamento',
            'estado' => 'disponible',
            'precio' => 177000,            
        ]);
    }
}
