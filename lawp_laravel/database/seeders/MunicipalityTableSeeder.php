<?php

namespace Database\Seeders;

use App\Models\municipality;
use Illuminate\Database\Seeder;

class MunicipalityTableSeeder extends Seeder
{

    public function run()
    {
        municipality::upsert([
            ['name'=>'LETICIA','fk_departaments_id'=>'1'],
            ['name'=>'EL ENCANTO','fk_departaments_id'=>'1'],
            ['name'=>'LA CHORRERA','fk_departaments_id'=>'1'],
            ['name'=>'LA PEDRERA','fk_departaments_id'=>'1'],
            ['name'=>'LA VICTORIA','fk_departaments_id'=>'1'],
            ['name'=>'MIRITI - PARANA','fk_departaments_id'=>'1'],
            ['name'=>'PUERTO ALEGRIA','fk_departaments_id'=>'1'],
            ['name'=>'PUERTO ARICA','fk_departaments_id'=>'1'],
            ['name'=>'PUERTO NARIÑO','fk_departaments_id'=>'1'],
            ['name'=>'PUERTO SANTANDER','fk_departaments_id'=>'1'],
            ['name'=>'TARAPACA','fk_departaments_id'=>'1'],
            ['name'=>'MEDELLIN','fk_departaments_id'=>'2'],
            ['name'=>'ABEJORRAL','fk_departaments_id'=>'2'],
            ['name'=>'ABRIAQUI','fk_departaments_id'=>'2'],
            ['name'=>'ALEJANDRIA','fk_departaments_id'=>'2'],
            ['name'=>'AMAGA','fk_departaments_id'=>'2'],
            ['name'=>'AMALFI','fk_departaments_id'=>'2'],
            ['name'=>'ANDES','fk_departaments_id'=>'2'],
            ['name'=>'ANGELOPOLIS','fk_departaments_id'=>'2'],
            ['name'=>'ANGOSTURA','fk_departaments_id'=>'2'],
            ['name'=>'ANORI','fk_departaments_id'=>'2'],
            ['name'=>'SANTAFE DE ANTIOQUIA','fk_departaments_id'=>'2'],
            ['name'=>'ANZA','fk_departaments_id'=>'2'],
            ['name'=>'APARTADO','fk_departaments_id'=>'2'],
            ['name'=>'ARBOLETES','fk_departaments_id'=>'2'],
            ['name'=>'ARGELIA','fk_departaments_id'=>'2'],
            ['name'=>'ARMENIA','fk_departaments_id'=>'2'],
            ['name'=>'BARBOSA','fk_departaments_id'=>'2'],
            ['name'=>'BELMIRA','fk_departaments_id'=>'2'],
            ['name'=>'BELLO','fk_departaments_id'=>'2'],
            ['name'=>'BETANIA','fk_departaments_id'=>'2'],
            ['name'=>'BETULIA','fk_departaments_id'=>'2'],
            ['name'=>'CIUDAD BOLIVAR','fk_departaments_id'=>'2'],
            ['name'=>'BRICEÑO','fk_departaments_id'=>'2'],
            ['name'=>'BURITICA','fk_departaments_id'=>'2'],
            ['name'=>'CACERES','fk_departaments_id'=>'2'],
            ['name'=>'CAICEDO','fk_departaments_id'=>'2'],
            ['name'=>'CALDAS','fk_departaments_id'=>'2'],
            ['name'=>'CAMPAMENTO','fk_departaments_id'=>'2'],
            ['name'=>'CAÑASGORDAS','fk_departaments_id'=>'2'],
            ['name'=>'CARACOLI','fk_departaments_id'=>'2'],
            ['name'=>'CARAMANTA','fk_departaments_id'=>'2'],
            ['name'=>'CAREPA','fk_departaments_id'=>'2'],
            ['name'=>'EL CARMEN DE VIBORAL','fk_departaments_id'=>'2'],
            ['name'=>'CAROLINA','fk_departaments_id'=>'2'],
            ['name'=>'CAUCASIA','fk_departaments_id'=>'2'],
            ['name'=>'CHIGORODO','fk_departaments_id'=>'2'],
            ['name'=>'CISNEROS','fk_departaments_id'=>'2'],
            ['name'=>'COCORNA','fk_departaments_id'=>'2'],
            ['name'=>'CONCEPCION','fk_departaments_id'=>'2'],
            ['name'=>'CONCORDIA','fk_departaments_id'=>'2'],
            ['name'=>'COPACABANA','fk_departaments_id'=>'2'],
            ['name'=>'DABEIBA','fk_departaments_id'=>'2'],
            ['name'=>'DON MATIAS','fk_departaments_id'=>'2'],
            ['name'=>'EBEJICO','fk_departaments_id'=>'2'],
            ['name'=>'EL BAGRE','fk_departaments_id'=>'2'],
            ['name'=>'ENTRERRIOS','fk_departaments_id'=>'2'],
            ['name'=>'ENVIGADO','fk_departaments_id'=>'2'],
            ['name'=>'FREDONIA','fk_departaments_id'=>'2'],
            ['name'=>'FRONTINO','fk_departaments_id'=>'2'],
            ['name'=>'GIRALDO','fk_departaments_id'=>'2'],
            ['name'=>'GIRARDOTA','fk_departaments_id'=>'2'],
            ['name'=>'GOMEZ PLATA','fk_departaments_id'=>'2'],
            ['name'=>'GRANADA','fk_departaments_id'=>'2'],
            ['name'=>'GUADALUPE','fk_departaments_id'=>'2'],
            ['name'=>'GUARNE','fk_departaments_id'=>'2'],
            ['name'=>'GUATAPE','fk_departaments_id'=>'2'],
            ['name'=>'HELICONIA','fk_departaments_id'=>'2'],
            ['name'=>'HISPANIA','fk_departaments_id'=>'2'],
            ['name'=>'ITAGUI','fk_departaments_id'=>'2'],
            ['name'=>'ITUANGO','fk_departaments_id'=>'2'],
            ['name'=>'JARDIN','fk_departaments_id'=>'2'],
            ['name'=>'JERICO','fk_departaments_id'=>'2'],
            ['name'=>'LA CEJA','fk_departaments_id'=>'2'],
            ['name'=>'LA ESTRELLA','fk_departaments_id'=>'2'],
            ['name'=>'LA PINTADA','fk_departaments_id'=>'2'],
            ['name'=>'LA UNION','fk_departaments_id'=>'2'],
            ['name'=>'LIBORINA','fk_departaments_id'=>'2'],
            ['name'=>'MACEO','fk_departaments_id'=>'2'],
            ['name'=>'MARINILLA','fk_departaments_id'=>'2'],
            ['name'=>'MONTEBELLO','fk_departaments_id'=>'2'],
            ['name'=>'MURINDO','fk_departaments_id'=>'2'],
            ['name'=>'MUTATA','fk_departaments_id'=>'2'],
            ['name'=>'NARIÑO','fk_departaments_id'=>'2'],
            ['name'=>'NECOCLI','fk_departaments_id'=>'2'],
            ['name'=>'NECHI','fk_departaments_id'=>'2'],
            ['name'=>'OLAYA','fk_departaments_id'=>'2'],
            ['name'=>'PEÐOL','fk_departaments_id'=>'2'],
            ['name'=>'PEQUE','fk_departaments_id'=>'2'],
            ['name'=>'PUEBLORRICO','fk_departaments_id'=>'2'],
            ['name'=>'PUERTO BERRIO','fk_departaments_id'=>'2'],
            ['name'=>'PUERTO NARE','fk_departaments_id'=>'2'],
            ['name'=>'PUERTO TRIUNFO','fk_departaments_id'=>'2'],
            ['name'=>'REMEDIOS','fk_departaments_id'=>'2'],
            ['name'=>'RETIRO','fk_departaments_id'=>'2'],
            ['name'=>'RIONEGRO','fk_departaments_id'=>'2'],
            ['name'=>'SABANALARGA','fk_departaments_id'=>'2'],
            ['name'=>'SABANETA','fk_departaments_id'=>'2'],
            ['name'=>'SALGAR','fk_departaments_id'=>'2'],
            ['name'=>'SAN ANDRES DE CUERQUIA','fk_departaments_id'=>'2'],
            ['name'=>'SAN CARLOS','fk_departaments_id'=>'2'],
            ['name'=>'SAN FRANCISCO','fk_departaments_id'=>'2'],
            ['name'=>'SAN JERONIMO','fk_departaments_id'=>'2'],
            ['name'=>'SAN JOSE DE LA MONTAÑA','fk_departaments_id'=>'2'],
            ['name'=>'SAN JUAN DE URABA','fk_departaments_id'=>'2'],
            ['name'=>'SAN LUIS','fk_departaments_id'=>'2'],
            ['name'=>'SAN PEDRO','fk_departaments_id'=>'2'],
            ['name'=>'SAN PEDRO DE URABA','fk_departaments_id'=>'2'],
            ['name'=>'SAN RAFAEL','fk_departaments_id'=>'2'],
            ['name'=>'SAN ROQUE','fk_departaments_id'=>'2'],
            ['name'=>'SAN VICENTE','fk_departaments_id'=>'2'],
            ['name'=>'SANTA BARBARA','fk_departaments_id'=>'2'],
            ['name'=>'SANTA ROSA DE OSOS','fk_departaments_id'=>'2'],
            ['name'=>'SANTO DOMINGO','fk_departaments_id'=>'2'],
            ['name'=>'EL SANTUARIO','fk_departaments_id'=>'2'],
            ['name'=>'SEGOVIA','fk_departaments_id'=>'2'],
            ['name'=>'SONSON','fk_departaments_id'=>'2'],
            ['name'=>'SOPETRAN','fk_departaments_id'=>'2'],
            ['name'=>'TAMESIS','fk_departaments_id'=>'2'],
            ['name'=>'TARAZA','fk_departaments_id'=>'2'],
            ['name'=>'TARSO','fk_departaments_id'=>'2'],
            ['name'=>'TITIRIBI','fk_departaments_id'=>'2'],
            ['name'=>'TOLEDO','fk_departaments_id'=>'2'],
            ['name'=>'TURBO','fk_departaments_id'=>'2'],
            ['name'=>'URAMITA','fk_departaments_id'=>'2'],
            ['name'=>'URRAO','fk_departaments_id'=>'2'],
            ['name'=>'VALDIVIA','fk_departaments_id'=>'2'],
            ['name'=>'VALPARAISO','fk_departaments_id'=>'2'],
            ['name'=>'VEGACHI','fk_departaments_id'=>'2'],
            ['name'=>'VENECIA','fk_departaments_id'=>'2'],
            ['name'=>'VIGIA DEL FUERTE','fk_departaments_id'=>'2'],
            ['name'=>'YALI','fk_departaments_id'=>'2'],
            ['name'=>'YARUMAL','fk_departaments_id'=>'2'],
            ['name'=>'YOLOMBO','fk_departaments_id'=>'2'],
            ['name'=>'YONDO','fk_departaments_id'=>'2'],
            ['name'=>'ZARAGOZA','fk_departaments_id'=>'2'],
            ['name'=>'ARAUCA','fk_departaments_id'=>'3'],
            ['name'=>'ARAUQUITA','fk_departaments_id'=>'3'],
            ['name'=>'CRAVO NORTE','fk_departaments_id'=>'3'],
            ['name'=>'FORTUL','fk_departaments_id'=>'3'],
            ['name'=>'PUERTO RONDON','fk_departaments_id'=>'3'],
            ['name'=>'SARAVENA','fk_departaments_id'=>'3'],
            ['name'=>'TAME','fk_departaments_id'=>'3'],
            ['name'=>'BARRANQUILLA','fk_departaments_id'=>'4'],
            ['name'=>'BARANOA','fk_departaments_id'=>'4'],
            ['name'=>'CAMPO DE LA CRUZ','fk_departaments_id'=>'4'],
            ['name'=>'CANDELARIA','fk_departaments_id'=>'4'],
            ['name'=>'GALAPA','fk_departaments_id'=>'4'],
            ['name'=>'JUAN DE ACOSTA','fk_departaments_id'=>'4'],
            ['name'=>'LURUACO','fk_departaments_id'=>'4'],
            ['name'=>'MALAMBO','fk_departaments_id'=>'4'],
            ['name'=>'MANATI','fk_departaments_id'=>'4'],
            ['name'=>'PALMAR DE VARELA','fk_departaments_id'=>'4'],
            ['name'=>'PIOJO','fk_departaments_id'=>'4'],
            ['name'=>'POLONUEVO','fk_departaments_id'=>'4'],
            ['name'=>'PONEDERA','fk_departaments_id'=>'4'],
            ['name'=>'PUERTO COLOMBIA','fk_departaments_id'=>'4'],
            ['name'=>'REPELON','fk_departaments_id'=>'4'],
            ['name'=>'SABANAGRANDE','fk_departaments_id'=>'4'],
            ['name'=>'SABANALARGA','fk_departaments_id'=>'4'],
            ['name'=>'SANTA LUCIA','fk_departaments_id'=>'4'],
            ['name'=>'SANTO TOMAS','fk_departaments_id'=>'4'],
            ['name'=>'SOLEDAD','fk_departaments_id'=>'4'],
            ['name'=>'SUAN','fk_departaments_id'=>'4'],
            ['name'=>'TUBARA','fk_departaments_id'=>'4'],
            ['name'=>'USIACURI','fk_departaments_id'=>'4'],
            ['name'=>'CARTAGENA','fk_departaments_id'=>'5'],
            ['name'=>'ACHI','fk_departaments_id'=>'5'],
            ['name'=>'ALTOS DEL ROSARIO','fk_departaments_id'=>'5'],
            ['name'=>'ARENAL','fk_departaments_id'=>'5'],
            ['name'=>'ARJONA','fk_departaments_id'=>'5'],
            ['name'=>'ARROYOHONDO','fk_departaments_id'=>'5'],
            ['name'=>'BARRANCO DE LOBA','fk_departaments_id'=>'5'],
            ['name'=>'CALAMAR','fk_departaments_id'=>'5'],
            ['name'=>'CANTAGALLO','fk_departaments_id'=>'5'],
            ['name'=>'CICUCO','fk_departaments_id'=>'5'],
            ['name'=>'CORDOBA','fk_departaments_id'=>'5'],
            ['name'=>'CLEMENCIA','fk_departaments_id'=>'5'],
            ['name'=>'EL CARMEN DE BOLIVAR','fk_departaments_id'=>'5'],
            ['name'=>'EL GUAMO','fk_departaments_id'=>'5'],
            ['name'=>'EL PEÑON','fk_departaments_id'=>'5'],
            ['name'=>'HATILLO DE LOBA','fk_departaments_id'=>'5'],
            ['name'=>'MAGANGUE','fk_departaments_id'=>'5'],
            ['name'=>'MAHATES','fk_departaments_id'=>'5'],
            ['name'=>'MARGARITA','fk_departaments_id'=>'5'],
            ['name'=>'MARIA LA BAJA','fk_departaments_id'=>'5'],
            ['name'=>'MONTECRISTO','fk_departaments_id'=>'5'],
            ['name'=>'MOMPOS','fk_departaments_id'=>'5'],
            ['name'=>'NOROSI','fk_departaments_id'=>'5'],
            ['name'=>'MORALES','fk_departaments_id'=>'5'],
            ['name'=>'PINILLOS','fk_departaments_id'=>'5'],
            ['name'=>'REGIDOR','fk_departaments_id'=>'5'],
            ['name'=>'RIO VIEJO','fk_departaments_id'=>'5'],
            ['name'=>'SAN CRISTOBAL','fk_departaments_id'=>'5'],
            ['name'=>'SAN ESTANISLAO','fk_departaments_id'=>'5'],
            ['name'=>'SAN FERNANDO','fk_departaments_id'=>'5'],
            ['name'=>'SAN JACINTO','fk_departaments_id'=>'5'],
            ['name'=>'SAN JACINTO DEL CAUCA','fk_departaments_id'=>'5'],
            ['name'=>'SAN JUAN NEPOMUCENO','fk_departaments_id'=>'5'],
            ['name'=>'SAN MARTIN DE LOBA','fk_departaments_id'=>'5'],
            ['name'=>'SAN PABLO','fk_departaments_id'=>'5'],
            ['name'=>'SANTA CATALINA','fk_departaments_id'=>'5'],
            ['name'=>'SANTA ROSA','fk_departaments_id'=>'5'],
            ['name'=>'SANTA ROSA DEL SUR','fk_departaments_id'=>'5'],
            ['name'=>'SIMITI','fk_departaments_id'=>'5'],
            ['name'=>'SOPLAVIENTO','fk_departaments_id'=>'5'],
            ['name'=>'TALAIGUA NUEVO','fk_departaments_id'=>'5'],
            ['name'=>'TIQUISIO','fk_departaments_id'=>'5'],
            ['name'=>'TURBACO','fk_departaments_id'=>'5'],
            ['name'=>'TURBANA','fk_departaments_id'=>'5'],
            ['name'=>'VILLANUEVA','fk_departaments_id'=>'5'],
            ['name'=>'ZAMBRANO','fk_departaments_id'=>'5'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],
            ['name'=>'','fk_departaments_id'=>'6'],














        ],
            ['name','fk_departaments_id']
        );
    }
}
