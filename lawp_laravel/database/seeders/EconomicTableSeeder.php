<?php

namespace Database\Seeders;

use App\Models\economic_sector;
use Illuminate\Database\Seeder;

class EconomicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        economic_sector::upsert([
            ['name'=>'Actividades artisticas de entretenimiento y recreacion'],
            ['name'=>'Actividades financieras y de seguros'],
            ['name'=>'Actividades inmobiliarias'],
            ['name'=>'Actividades cientificas profesionales y tecnicas'],
            ['name'=>'Actividades religiosas y funerarias'],
            ['name'=>'Agencias de viajes / operadores turisticos'],
            ['name'=>'Agricultura, ganaderia, caza, sivicultura y pesca'],
            ['name'=>'Asesoria, consultoria, asesoria'],
            ['name'=>'Asociasiones (membresias, agremiaciones)'],
            ['name'=>'Atencion en salud humana y de asistencia social'],
            ['name'=>'comercia al por mayor y al detal'],
            ['name'=>'Construccion'],
            ['name'=>'Educacion'],
            ['name'=>'Ensayos y analisis tecnicos'],
            ['name'=>'Hoteleria'],
            ['name'=>'Industria y manufactureras'],
            ['name'=>'Ingenieria, arquitectura y relacionados'],
            ['name'=>'Limpieza, desinfeccion, mensajeria'],
            ['name'=>'Maquinaria y equipos: mantenimiento e instalacion'],
            ['name'=>'Mineria y canteria'],
            ['name'=>'Otros servicios: legales, contables, mercadeo, publicidad, fotografia, traduccion'],
            ['name'=>'Recuperacion de materiales (reciclaje)'],
            ['name'=>'Seguridad e investigacion'],
            ['name'=>'Servicios administrativos: actividades relacionadas con el empleo y apoyo en las oficinas'],
            ['name'=>'Servicios de alimentacion / restaurante'],
            ['name'=>'Servicios personales: Lavanderia, peluqueria, astrologia'],
            ['name'=>'Servicios publicos escensiales: Acueducto y alcantarillado, energia, gas'],
            ['name'=>'Tecnologia de la informacion'],
            ['name'=>'Telecomunicaciones'],
            ['name'=>'Transporte y almacenamiento'],
        ],
            ['name']
        );
    }
}
