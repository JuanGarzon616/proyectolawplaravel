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
            ['name'=>'TUNJA
','fk_departaments_id'=>'6'],
            ['name'=>'ALMEIDA
','fk_departaments_id'=>'6'],
            ['name'=>'AQUITANIA
','fk_departaments_id'=>'6'],
            ['name'=>'BELEN
','fk_departaments_id'=>'6'],
            ['name'=>'BERBEO
','fk_departaments_id'=>'6'],
            ['name'=>'BETEITIVA
','fk_departaments_id'=>'6'],
            ['name'=>'BOAVITA
','fk_departaments_id'=>'6'],
            ['name'=>'BOYACA
','fk_departaments_id'=>'6'],
            ['name'=>'BRICEÑO
','fk_departaments_id'=>'6'],
            ['name'=>'BUENAVISTA
','fk_departaments_id'=>'6'],
            ['name'=>'BUSBANZA
','fk_departaments_id'=>'6'],
            ['name'=>'CALDAS
','fk_departaments_id'=>'6'],
            ['name'=>'CAMPOHERMOSO
','fk_departaments_id'=>'6'],
            ['name'=>'CERINZA
','fk_departaments_id'=>'6'],
            ['name'=>'CHINAVITA
','fk_departaments_id'=>'6'],
            ['name'=>'CHIQUINQUIRA
','fk_departaments_id'=>'6'],
            ['name'=>'CHISCAS
','fk_departaments_id'=>'6'],
            ['name'=>'CHITA
','fk_departaments_id'=>'6'],
            ['name'=>'CHITARAQUE
','fk_departaments_id'=>'6'],
            ['name'=>'CHIVATA
','fk_departaments_id'=>'6'],
            ['name'=>'CIENEGA
','fk_departaments_id'=>'6'],
            ['name'=>'COMBITA
','fk_departaments_id'=>'6'],
            ['name'=>'COPER
','fk_departaments_id'=>'6'],
            ['name'=>'CORRALES
','fk_departaments_id'=>'6'],
            ['name'=>'COVARACHIA
','fk_departaments_id'=>'6'],
            ['name'=>'CUBARA
','fk_departaments_id'=>'6'],
            ['name'=>'CUCAITA
','fk_departaments_id'=>'6'],
            ['name'=>'CUITIVA
','fk_departaments_id'=>'6'],
            ['name'=>'CHIQUIZA
','fk_departaments_id'=>'6'],
            ['name'=>'CHIVOR
','fk_departaments_id'=>'6'],
            ['name'=>'DUITAMA
','fk_departaments_id'=>'6'],
            ['name'=>'EL COCUY
','fk_departaments_id'=>'6'],
            ['name'=>'EL ESPINO
','fk_departaments_id'=>'6'],
            ['name'=>'FIRAVITOBA
','fk_departaments_id'=>'6'],
            ['name'=>'FLORESTA
','fk_departaments_id'=>'6'],
            ['name'=>'GACHANTIVA
','fk_departaments_id'=>'6'],
            ['name'=>'GAMEZA
','fk_departaments_id'=>'6'],
            ['name'=>'GARAGOA
','fk_departaments_id'=>'6'],
            ['name'=>'GUACAMAYAS
','fk_departaments_id'=>'6'],
            ['name'=>'GUATEQUE
','fk_departaments_id'=>'6'],
            ['name'=>'GUAYATA
','fk_departaments_id'=>'6'],
            ['name'=>'GsICAN
','fk_departaments_id'=>'6'],
            ['name'=>'IZA
','fk_departaments_id'=>'6'],
            ['name'=>'JENESANO
','fk_departaments_id'=>'6'],
            ['name'=>'JERICO
','fk_departaments_id'=>'6'],
            ['name'=>'LABRANZAGRANDE
','fk_departaments_id'=>'6'],
            ['name'=>'LA CAPILLA
','fk_departaments_id'=>'6'],
            ['name'=>'LA VICTORIA
','fk_departaments_id'=>'6'],
            ['name'=>'LA UVITA
','fk_departaments_id'=>'6'],
            ['name'=>'VILLA DE LEYVA
','fk_departaments_id'=>'6'],
            ['name'=>'MACANAL
','fk_departaments_id'=>'6'],
            ['name'=>'MARIPI
','fk_departaments_id'=>'6'],
            ['name'=>'MIRAFLORES
','fk_departaments_id'=>'6'],
            ['name'=>'MONGUA
','fk_departaments_id'=>'6'],
            ['name'=>'MONGUI
','fk_departaments_id'=>'6'],
            ['name'=>'MONIQUIRA
','fk_departaments_id'=>'6'],
            ['name'=>'MOTAVITA
','fk_departaments_id'=>'6'],
            ['name'=>'MUZO
','fk_departaments_id'=>'6'],
            ['name'=>'NOBSA
','fk_departaments_id'=>'6'],
            ['name'=>'NUEVO COLON
','fk_departaments_id'=>'6'],
            ['name'=>'OICATA
','fk_departaments_id'=>'6'],
            ['name'=>'OTANCHE
','fk_departaments_id'=>'6'],
            ['name'=>'PACHAVITA
','fk_departaments_id'=>'6'],
            ['name'=>'PAEZ
','fk_departaments_id'=>'6'],
            ['name'=>'PAIPA
','fk_departaments_id'=>'6'],
            ['name'=>'PAJARITO
','fk_departaments_id'=>'6'],
            ['name'=>'PANQUEBA
','fk_departaments_id'=>'6'],
            ['name'=>'PAUNA
','fk_departaments_id'=>'6'],
            ['name'=>'PAYA
','fk_departaments_id'=>'6'],
            ['name'=>'PAZ DE RIO
','fk_departaments_id'=>'6'],
            ['name'=>'PESCA
','fk_departaments_id'=>'6'],
            ['name'=>'PISBA
','fk_departaments_id'=>'6'],
            ['name'=>'PUERTO BOYACA
','fk_departaments_id'=>'6'],
            ['name'=>'QUIPAMA
','fk_departaments_id'=>'6'],
            ['name'=>'RAMIRIQUI
','fk_departaments_id'=>'6'],
            ['name'=>'RAQUIRA
','fk_departaments_id'=>'6'],
            ['name'=>'RONDON
','fk_departaments_id'=>'6'],
            ['name'=>'SABOYA
','fk_departaments_id'=>'6'],
            ['name'=>'SACHICA
','fk_departaments_id'=>'6'],
            ['name'=>'SAMACA
','fk_departaments_id'=>'6'],
            ['name'=>'SAN EDUARDO
','fk_departaments_id'=>'6'],
            ['name'=>'SAN JOSE DE PARE
','fk_departaments_id'=>'6'],
            ['name'=>'SAN LUIS DE GACENO
','fk_departaments_id'=>'6'],
            ['name'=>'SAN MATEO
','fk_departaments_id'=>'6'],
            ['name'=>'SAN MIGUEL DE SEMA
','fk_departaments_id'=>'6'],
            ['name'=>'SAN PABLO DE BORBUR
','fk_departaments_id'=>'6'],
            ['name'=>'SANTANA
','fk_departaments_id'=>'6'],
            ['name'=>'SANTA MARIA
','fk_departaments_id'=>'6'],
            ['name'=>'SANTA ROSA DE VITERBO
','fk_departaments_id'=>'6'],
            ['name'=>'SANTA SOFIA
','fk_departaments_id'=>'6'],
            ['name'=>'SATIVANORTE
','fk_departaments_id'=>'6'],
            ['name'=>'SATIVASUR
','fk_departaments_id'=>'6'],
            ['name'=>'SIACHOQUE
','fk_departaments_id'=>'6'],
            ['name'=>'SOATA
','fk_departaments_id'=>'6'],
            ['name'=>'SOCOTA
','fk_departaments_id'=>'6'],
            ['name'=>'SOCHA
','fk_departaments_id'=>'6'],
            ['name'=>'SOGAMOSO
','fk_departaments_id'=>'6'],
            ['name'=>'SOMONDOCO
','fk_departaments_id'=>'6'],
            ['name'=>'SORA
','fk_departaments_id'=>'6'],
            ['name'=>'SOTAQUIRA
','fk_departaments_id'=>'6'],
            ['name'=>'SORACA
','fk_departaments_id'=>'6'],
            ['name'=>'SUSACON
','fk_departaments_id'=>'6'],
            ['name'=>'SUTAMARCHAN
','fk_departaments_id'=>'6'],
            ['name'=>'SUTATENZA
','fk_departaments_id'=>'6'],
            ['name'=>'TASCO
','fk_departaments_id'=>'6'],
            ['name'=>'TENZA
','fk_departaments_id'=>'6'],
            ['name'=>'TIBANA
','fk_departaments_id'=>'6'],
            ['name'=>'TIBASOSA
','fk_departaments_id'=>'6'],
            ['name'=>'TINJACA
','fk_departaments_id'=>'6'],
            ['name'=>'TIPACOQUE
','fk_departaments_id'=>'6'],
            ['name'=>'TOCA
','fk_departaments_id'=>'6'],
            ['name'=>'TOGsI
','fk_departaments_id'=>'6'],
            ['name'=>'TOPAGA
','fk_departaments_id'=>'6'],
            ['name'=>'TOTA
','fk_departaments_id'=>'6'],
            ['name'=>'TUNUNGUA
','fk_departaments_id'=>'6'],
            ['name'=>'TURMEQUE
','fk_departaments_id'=>'6'],
            ['name'=>'TUTA
','fk_departaments_id'=>'6'],
            ['name'=>'TUTAZA
','fk_departaments_id'=>'6'],
            ['name'=>'UMBITA
','fk_departaments_id'=>'6'],
            ['name'=>'VENTAQUEMADA
','fk_departaments_id'=>'6'],
            ['name'=>'VIRACACHA
','fk_departaments_id'=>'6'],
            ['name'=>'ZETAQUIRA
','fk_departaments_id'=>'6'],
            ['name'=>'MANIZALES
','fk_departaments_id'=>'7'],
            ['name'=>'AGUADAS
','fk_departaments_id'=>'7'],
            ['name'=>'ANSERMA
','fk_departaments_id'=>'7'],
            ['name'=>'ARANZAZU
','fk_departaments_id'=>'7'],
            ['name'=>'BELALCAZAR
','fk_departaments_id'=>'7'],
            ['name'=>'CHINCHINA
','fk_departaments_id'=>'7'],
            ['name'=>'FILADELFIA
','fk_departaments_id'=>'7'],
            ['name'=>'LA DORADA
','fk_departaments_id'=>'7'],
            ['name'=>'LA MERCED
','fk_departaments_id'=>'7'],
            ['name'=>'MANZANARES
','fk_departaments_id'=>'7'],
            ['name'=>'MARMATO
','fk_departaments_id'=>'7'],
            ['name'=>'MARQUETALIA
','fk_departaments_id'=>'7'],
            ['name'=>'MARULANDA
','fk_departaments_id'=>'7'],
            ['name'=>'NEIRA
','fk_departaments_id'=>'7'],
            ['name'=>'NORCASIA
','fk_departaments_id'=>'7'],
            ['name'=>'PACORA
','fk_departaments_id'=>'7'],
            ['name'=>'PALESTINA
','fk_departaments_id'=>'7'],
            ['name'=>'PENSILVANIA
','fk_departaments_id'=>'7'],
            ['name'=>'RIOSUCIO
','fk_departaments_id'=>'7'],
            ['name'=>'RISARALDA
','fk_departaments_id'=>'7'],
            ['name'=>'SALAMINA
','fk_departaments_id'=>'7'],
            ['name'=>'SAMANA
','fk_departaments_id'=>'7'],
            ['name'=>'SAN JOSE
','fk_departaments_id'=>'7'],
            ['name'=>'SUPIA
','fk_departaments_id'=>'7'],
            ['name'=>'VICTORIA
','fk_departaments_id'=>'7'],
            ['name'=>'VILLAMARIA
','fk_departaments_id'=>'7'],
            ['name'=>'VITERBO
','fk_departaments_id'=>'7'],
            ['name'=>'FLORENCIA
','fk_departaments_id'=>'8'],
            ['name'=>'ALBANIA
','fk_departaments_id'=>'8'],
            ['name'=>'BELEN DE LOS ANDAQUIES
','fk_departaments_id'=>'8'],
            ['name'=>'CARTAGENA DEL CHAIRA
','fk_departaments_id'=>'8'],
            ['name'=>'CURILLO
','fk_departaments_id'=>'8'],
            ['name'=>'EL DONCELLO
','fk_departaments_id'=>'8'],
            ['name'=>'EL PAUJIL
','fk_departaments_id'=>'8'],
            ['name'=>'LA MONTAÑITA
','fk_departaments_id'=>'8'],
            ['name'=>'MILAN
','fk_departaments_id'=>'8'],
            ['name'=>'MORELIA
','fk_departaments_id'=>'8'],
            ['name'=>'PUERTO RICO
','fk_departaments_id'=>'8'],
            ['name'=>'SAN JOSE DEL FRAGUA
','fk_departaments_id'=>'8'],
            ['name'=>'SAN VICENTE DEL CAGUAN
','fk_departaments_id'=>'8'],
            ['name'=>'SOLANO
','fk_departaments_id'=>'8'],
            ['name'=>'SOLITA
','fk_departaments_id'=>'8'],
            ['name'=>'VALPARAISO
','fk_departaments_id'=>'8'],
            ['name'=>'YOPAL
','fk_departaments_id'=>'9'],
            ['name'=>'AGUAZUL
','fk_departaments_id'=>'9'],
            ['name'=>'CHAMEZA
','fk_departaments_id'=>'9'],
            ['name'=>'HATO COROZAL
','fk_departaments_id'=>'9'],
            ['name'=>'LA SALINA
','fk_departaments_id'=>'9'],
            ['name'=>'MANI
','fk_departaments_id'=>'9'],
            ['name'=>'MONTERREY
','fk_departaments_id'=>'9'],
            ['name'=>'NUNCHIA
','fk_departaments_id'=>'9'],
            ['name'=>'OROCUE
','fk_departaments_id'=>'9'],
            ['name'=>'PAZ DE ARIPORO
','fk_departaments_id'=>'9'],
            ['name'=>'PORE
','fk_departaments_id'=>'9'],
            ['name'=>'RECETOR
','fk_departaments_id'=>'9'],
            ['name'=>'SABANALARGA
','fk_departaments_id'=>'9'],
            ['name'=>'SACAMA
','fk_departaments_id'=>'9'],
            ['name'=>'SAN LUIS DE PALENQUE
','fk_departaments_id'=>'9'],
            ['name'=>'TAMARA
','fk_departaments_id'=>'9'],
            ['name'=>'TAURAMENA
','fk_departaments_id'=>'9'],
            ['name'=>'TRINIDAD
','fk_departaments_id'=>'9'],
            ['name'=>'VILLANUEVA
','fk_departaments_id'=>'9'],
            ['name'=>'Almaguer','fk_departaments_id'=>'10'],
            ['name'=>'Argelia','fk_departaments_id'=>'10'],
            ['name'=>'Balboa','fk_departaments_id'=>'10'],
            ['name'=>'Bolívar','fk_departaments_id'=>'10'],
            ['name'=>'Buenos Aires','fk_departaments_id'=>'10'],
            ['name'=>'Cajibío','fk_departaments_id'=>'10'],
            ['name'=>'Caldono','fk_departaments_id'=>'10'],
            ['name'=>'Caloto','fk_departaments_id'=>'10'],
            ['name'=>'Corinto','fk_departaments_id'=>'10'],
            ['name'=>'Florencia','fk_departaments_id'=>'10'],
            ['name'=>'Guapi','fk_departaments_id'=>'10'],
            ['name'=>'Inzá','fk_departaments_id'=>'10'],
            ['name'=>'Jambaló','fk_departaments_id'=>'10'],
            ['name'=>'La Sierra','fk_departaments_id'=>'10'],
            ['name'=>'La Vega','fk_departaments_id'=>'10'],
            ['name'=>'López de Micay','fk_departaments_id'=>'10'],
            ['name'=>'Mercaderes','fk_departaments_id'=>'10'],
            ['name'=>'Miranda','fk_departaments_id'=>'10'],
            ['name'=>'Morales','fk_departaments_id'=>'10'],
            ['name'=>'Villa Rica','fk_departaments_id'=>'10'],
            ['name'=>'Padilla','fk_departaments_id'=>'10'],
            ['name'=>'Páez','fk_departaments_id'=>'10'],
            ['name'=>'Piamonte','fk_departaments_id'=>'10'],
            ['name'=>'Piendamó','fk_departaments_id'=>'10'],
            ['name'=>'Puerto Tejada','fk_departaments_id'=>'10'],
            ['name'=>'Puracé-Coconuco','fk_departaments_id'=>'10'],
            ['name'=>'Rosas','fk_departaments_id'=>'10'],
            ['name'=>'San Sebastián','fk_departaments_id'=>'10'],
            ['name'=>'Santa Rosa','fk_departaments_id'=>'10'],
            ['name'=>'Santander de Quilichao','fk_departaments_id'=>'10'],
            ['name'=>'Silvia','fk_departaments_id'=>'10'],
            ['name'=>'Suárez','fk_departaments_id'=>'10'],
            ['name'=>'Sucre','fk_departaments_id'=>'10'],
            ['name'=>'Timbío','fk_departaments_id'=>'10'],
            ['name'=>'Timbiquí','fk_departaments_id'=>'10'],
            ['name'=>'Toribío','fk_departaments_id'=>'10'],
            ['name'=>'Totoró','fk_departaments_id'=>'10'],
            ['name'=>'VALLEDUPAR
','fk_departaments_id'=>'11'],
            ['name'=>'AGUACHICA
','fk_departaments_id'=>'11'],
            ['name'=>'AGUSTIN CODAZZI
','fk_departaments_id'=>'11'],
            ['name'=>'ASTREA
','fk_departaments_id'=>'11'],
            ['name'=>'BECERRIL
','fk_departaments_id'=>'11'],
            ['name'=>'BOSCONIA
','fk_departaments_id'=>'11'],
            ['name'=>'CHIMICHAGUA
','fk_departaments_id'=>'11'],
            ['name'=>'CHIRIGUANA
','fk_departaments_id'=>'11'],
            ['name'=>'CURUMANI
','fk_departaments_id'=>'11'],
            ['name'=>'EL COPEY
','fk_departaments_id'=>'11'],
            ['name'=>'EL PASO
','fk_departaments_id'=>'11'],
            ['name'=>'GAMARRA
','fk_departaments_id'=>'11'],
            ['name'=>'GONZALEZ
','fk_departaments_id'=>'11'],
            ['name'=>'LA GLORIA
','fk_departaments_id'=>'11'],
            ['name'=>'LA JAGUA DE IBIRICO
','fk_departaments_id'=>'11'],
            ['name'=>'MANAURE
','fk_departaments_id'=>'11'],
            ['name'=>'PAILITAS
','fk_departaments_id'=>'11'],
            ['name'=>'PELAYA
','fk_departaments_id'=>'11'],
            ['name'=>'PUEBLO BELLO
','fk_departaments_id'=>'11'],
            ['name'=>'RIO DE ORO
','fk_departaments_id'=>'11'],
            ['name'=>'LA PAZ
','fk_departaments_id'=>'11'],
            ['name'=>'SAN ALBERTO
','fk_departaments_id'=>'11'],
            ['name'=>'SAN DIEGO
','fk_departaments_id'=>'11'],
            ['name'=>'SAN MARTIN
','fk_departaments_id'=>'11'],
            ['name'=>'TAMALAMEQUE
','fk_departaments_id'=>'11'],
            ['name'=>'QUIBDO
','fk_departaments_id'=>'12'],
            ['name'=>'ACANDI
','fk_departaments_id'=>'12'],
            ['name'=>'ALTO BAUDO
','fk_departaments_id'=>'12'],
            ['name'=>'ATRATO
','fk_departaments_id'=>'12'],
            ['name'=>'BAGADO
','fk_departaments_id'=>'12'],
            ['name'=>'BAHIA SOLANO
','fk_departaments_id'=>'12'],
            ['name'=>'BAJO BAUDO
','fk_departaments_id'=>'12'],
            ['name'=>'BOJAYA
','fk_departaments_id'=>'12'],
            ['name'=>'EL CANTON DEL SAN PABLO
','fk_departaments_id'=>'12'],
            ['name'=>'CARMEN DEL DARIEN
','fk_departaments_id'=>'12'],
            ['name'=>'CERTEGUI
','fk_departaments_id'=>'12'],
            ['name'=>'CONDOTO
','fk_departaments_id'=>'12'],
            ['name'=>'EL CARMEN DE ATRATO
','fk_departaments_id'=>'12'],
            ['name'=>'EL LITORAL DEL SAN JUAN
','fk_departaments_id'=>'12'],
            ['name'=>'ISTMINA
','fk_departaments_id'=>'12'],
            ['name'=>'JURADO
','fk_departaments_id'=>'12'],
            ['name'=>'LLORO
','fk_departaments_id'=>'12'],
            ['name'=>'MEDIO ATRATO
','fk_departaments_id'=>'12'],
            ['name'=>'MEDIO BAUDO
','fk_departaments_id'=>'12'],
            ['name'=>'MEDIO SAN JUAN
','fk_departaments_id'=>'12'],
            ['name'=>'NOVITA
','fk_departaments_id'=>'12'],
            ['name'=>'NUQUI
','fk_departaments_id'=>'12'],
            ['name'=>'RIO IRO
','fk_departaments_id'=>'12'],
            ['name'=>'RIO QUITO
','fk_departaments_id'=>'12'],
            ['name'=>'RIOSUCIO
','fk_departaments_id'=>'12'],
            ['name'=>'SAN JOSE DEL PALMAR
','fk_departaments_id'=>'12'],
            ['name'=>'SIPI
','fk_departaments_id'=>'12'],
            ['name'=>'TADO
','fk_departaments_id'=>'12'],
            ['name'=>'UNGUIA
','fk_departaments_id'=>'12'],
            ['name'=>'UNION PANAMERICANA
','fk_departaments_id'=>'12'],
            ['name'=>'MONTERIA
','fk_departaments_id'=>'13'],
            ['name'=>'AYAPEL
','fk_departaments_id'=>'13'],
            ['name'=>'BUENAVISTA
','fk_departaments_id'=>'13'],
            ['name'=>'CANALETE
','fk_departaments_id'=>'13'],
            ['name'=>'CERETE
','fk_departaments_id'=>'13'],
            ['name'=>'CHIMA
','fk_departaments_id'=>'13'],
            ['name'=>'CHINU
','fk_departaments_id'=>'13'],
            ['name'=>'CIENAGA DE ORO
','fk_departaments_id'=>'13'],
            ['name'=>'COTORRA
','fk_departaments_id'=>'13'],
            ['name'=>'LA APARTADA
','fk_departaments_id'=>'13'],
            ['name'=>'LORICA
','fk_departaments_id'=>'13'],
            ['name'=>'LOS CORDOBAS
','fk_departaments_id'=>'13'],
            ['name'=>'MOMIL
','fk_departaments_id'=>'13'],
            ['name'=>'MONTELIBANO
','fk_departaments_id'=>'13'],
            ['name'=>'MOÑITOS
','fk_departaments_id'=>'13'],
            ['name'=>'PLANETA RICA
','fk_departaments_id'=>'13'],
            ['name'=>'PUEBLO NUEVO
','fk_departaments_id'=>'13'],
            ['name'=>'PUERTO ESCONDIDO
','fk_departaments_id'=>'13'],
            ['name'=>'PUERTO LIBERTADOR','fk_departaments_id'=>'13'],
            ['name'=>'PURISIMA
','fk_departaments_id'=>'13'],
            ['name'=>'SAHAGUN
','fk_departaments_id'=>'13'],
            ['name'=>'SAN ANDRES SOTAVENTO
','fk_departaments_id'=>'13'],
            ['name'=>'SAN ANTERO
','fk_departaments_id'=>'13'],
            ['name'=>'SAN BERNARDO DEL VIENTO
','fk_departaments_id'=>'13'],
            ['name'=>'SAN CARLOS
','fk_departaments_id'=>'13'],
            ['name'=>'SAN PELAYO
','fk_departaments_id'=>'13'],
            ['name'=>'TIERRALTA
','fk_departaments_id'=>'13'],
            ['name'=>'VALENCIA
','fk_departaments_id'=>'13'],
            ['name'=>'AGUA DE DIOS
','fk_departaments_id'=>'14'],
            ['name'=>'ALBAN
','fk_departaments_id'=>'14'],
            ['name'=>'ANAPOIMA
','fk_departaments_id'=>'14'],
            ['name'=>'ANOLAIMA
','fk_departaments_id'=>'14'],
            ['name'=>'ARBELAEZ
','fk_departaments_id'=>'14'],
            ['name'=>'BELTRAN
','fk_departaments_id'=>'14'],
            ['name'=>'BITUIMA
','fk_departaments_id'=>'14'],
            ['name'=>'BOJACA
','fk_departaments_id'=>'14'],
            ['name'=>'CABRERA
','fk_departaments_id'=>'14'],
            ['name'=>'CACHIPAY
','fk_departaments_id'=>'14'],
            ['name'=>'CAJICA
','fk_departaments_id'=>'14'],
            ['name'=>'CAPARRAPI
','fk_departaments_id'=>'14'],
            ['name'=>'CAQUEZA
','fk_departaments_id'=>'14'],
            ['name'=>'CARMEN DE CARUPA
','fk_departaments_id'=>'14'],
            ['name'=>'CHAGUANI
','fk_departaments_id'=>'14'],
            ['name'=>'CHIA
','fk_departaments_id'=>'14'],
            ['name'=>'CHIPAQUE
','fk_departaments_id'=>'14'],
            ['name'=>'CHOACHI
','fk_departaments_id'=>'14'],
            ['name'=>'CHOCONTA
','fk_departaments_id'=>'14'],
            ['name'=>'COGUA
','fk_departaments_id'=>'14'],
            ['name'=>'COTA
','fk_departaments_id'=>'14'],
            ['name'=>'CUCUNUBA
','fk_departaments_id'=>'14'],
            ['name'=>'EL COLEGIO
','fk_departaments_id'=>'14'],
            ['name'=>'EL PEÑON
','fk_departaments_id'=>'14'],
            ['name'=>'EL ROSAL
','fk_departaments_id'=>'14'],
            ['name'=>'FACATATIVA
','fk_departaments_id'=>'14'],
            ['name'=>'FOMEQUE
','fk_departaments_id'=>'14'],
            ['name'=>'FOSCA
','fk_departaments_id'=>'14'],
            ['name'=>'FUNZA
','fk_departaments_id'=>'14'],
            ['name'=>'FUQUENE
','fk_departaments_id'=>'14'],
            ['name'=>'FUSAGASUGA
','fk_departaments_id'=>'14'],
            ['name'=>'GACHALA
','fk_departaments_id'=>'14'],
            ['name'=>'GACHANCIPA
','fk_departaments_id'=>'14'],
            ['name'=>'GACHETA
','fk_departaments_id'=>'14'],
            ['name'=>'GAMA
','fk_departaments_id'=>'14'],
            ['name'=>'GIRARDOT
','fk_departaments_id'=>'14'],
            ['name'=>'GRANADA
','fk_departaments_id'=>'14'],
            ['name'=>'GUACHETA
','fk_departaments_id'=>'14'],
            ['name'=>'GUADUAS
','fk_departaments_id'=>'14'],
            ['name'=>'GUASCA
','fk_departaments_id'=>'14'],
            ['name'=>'GUATAQUI
','fk_departaments_id'=>'14'],
            ['name'=>'GUATAVITA
','fk_departaments_id'=>'14'],
            ['name'=>'GUAYABAL DE SIQUIMA
','fk_departaments_id'=>'14'],
            ['name'=>'GUAYABETAL
','fk_departaments_id'=>'14'],
            ['name'=>'GUTIERREZ
','fk_departaments_id'=>'14'],
            ['name'=>'JERUSALEN
','fk_departaments_id'=>'14'],
            ['name'=>'JUNIN
','fk_departaments_id'=>'14'],
            ['name'=>'LA CALERA
','fk_departaments_id'=>'14'],
            ['name'=>'LA MESA
','fk_departaments_id'=>'14'],
            ['name'=>'LA PALMA
','fk_departaments_id'=>'14'],
            ['name'=>'LA PEÑA
','fk_departaments_id'=>'14'],
            ['name'=>'LA VEGA
','fk_departaments_id'=>'14'],
            ['name'=>'LENGUAZAQUE
','fk_departaments_id'=>'14'],
            ['name'=>'MACHETA
','fk_departaments_id'=>'14'],
            ['name'=>'MADRID
','fk_departaments_id'=>'14'],
            ['name'=>'MANTA
','fk_departaments_id'=>'14'],
            ['name'=>'MEDINA
','fk_departaments_id'=>'14'],
            ['name'=>'MOSQUERA
','fk_departaments_id'=>'14'],
            ['name'=>'NARIÑO
','fk_departaments_id'=>'14'],
            ['name'=>'NEMOCON
','fk_departaments_id'=>'14'],
            ['name'=>'NILO
','fk_departaments_id'=>'14'],
            ['name'=>'NIMAIMA
','fk_departaments_id'=>'14'],
            ['name'=>'NOCAIMA
','fk_departaments_id'=>'14'],
            ['name'=>'VENECIA
','fk_departaments_id'=>'14'],
            ['name'=>'PACHO
','fk_departaments_id'=>'14'],
            ['name'=>'PAIME
','fk_departaments_id'=>'14'],
            ['name'=>'PANDI
','fk_departaments_id'=>'14'],
            ['name'=>'PARATEBUENO
','fk_departaments_id'=>'14'],
            ['name'=>'PASCA
','fk_departaments_id'=>'14'],
            ['name'=>'PUERTO SALGAR
','fk_departaments_id'=>'14'],
            ['name'=>'PULI
','fk_departaments_id'=>'14'],
            ['name'=>'QUEBRADANEGRA
','fk_departaments_id'=>'14'],
            ['name'=>'QUETAME
','fk_departaments_id'=>'14'],
            ['name'=>'QUIPILE
','fk_departaments_id'=>'14'],
            ['name'=>'APULO
','fk_departaments_id'=>'14'],
            ['name'=>'RICAURTE
','fk_departaments_id'=>'14'],
            ['name'=>'SAN ANTONIO DEL TEQUENDAMA
','fk_departaments_id'=>'14'],
            ['name'=>'SAN BERNARDO
','fk_departaments_id'=>'14'],
            ['name'=>'SAN CAYETANO
','fk_departaments_id'=>'14'],
            ['name'=>'SAN FRANCISCO
','fk_departaments_id'=>'14'],
            ['name'=>'SAN JUAN DE RIO SECO
','fk_departaments_id'=>'14'],
            ['name'=>'SASAIMA
','fk_departaments_id'=>'14'],
            ['name'=>'SESQUILE
','fk_departaments_id'=>'14'],
            ['name'=>'SIBATE
','fk_departaments_id'=>'14'],
            ['name'=>'SILVANIA
','fk_departaments_id'=>'14'],
            ['name'=>'SIMIJACA
','fk_departaments_id'=>'14'],
            ['name'=>'SOACHA
','fk_departaments_id'=>'14'],
            ['name'=>'SOPO
','fk_departaments_id'=>'14'],
            ['name'=>'SUBACHOQUE
','fk_departaments_id'=>'14'],
            ['name'=>'SUESCA
','fk_departaments_id'=>'14'],
            ['name'=>'SUPATA
','fk_departaments_id'=>'14'],
            ['name'=>'SUSA
','fk_departaments_id'=>'14'],
            ['name'=>'SUTATAUSA
','fk_departaments_id'=>'14'],
            ['name'=>'TABIO
','fk_departaments_id'=>'14'],
            ['name'=>'TAUSA
','fk_departaments_id'=>'14'],
            ['name'=>'TENA
','fk_departaments_id'=>'14'],
            ['name'=>'TENJO
','fk_departaments_id'=>'14'],
            ['name'=>'TIBACUY
','fk_departaments_id'=>'14'],
            ['name'=>'TIBIRITA
','fk_departaments_id'=>'14'],
            ['name'=>'TOCAIMA
','fk_departaments_id'=>'14'],
            ['name'=>'TOCANCIPA
','fk_departaments_id'=>'14'],
            ['name'=>'TOPAIPI
','fk_departaments_id'=>'14'],
            ['name'=>'UBALA
','fk_departaments_id'=>'14'],
            ['name'=>'UBAQUE
','fk_departaments_id'=>'14'],
            ['name'=>'VILLA DE SAN DIEGO DE UBATE
','fk_departaments_id'=>'14'],
            ['name'=>'UNE
','fk_departaments_id'=>'14'],
            ['name'=>'UTICA
','fk_departaments_id'=>'14'],
            ['name'=>'VERGARA
','fk_departaments_id'=>'14'],
            ['name'=>'VIANI
','fk_departaments_id'=>'14'],
            ['name'=>'VILLAGOMEZ
','fk_departaments_id'=>'14'],
            ['name'=>'VILLAPINZON
','fk_departaments_id'=>'14'],
            ['name'=>'VILLETA
','fk_departaments_id'=>'14'],
            ['name'=>'VIOTA
','fk_departaments_id'=>'14'],
            ['name'=>'YACOPI
','fk_departaments_id'=>'14'],
            ['name'=>'ZIPACON
','fk_departaments_id'=>'14'],
            ['name'=>'ZIPAQUIRA
','fk_departaments_id'=>'14'],
            ['name'=>'INIRIDA
','fk_departaments_id'=>'15'],
            ['name'=>'BARRANCO MINAS
','fk_departaments_id'=>'15'],
            ['name'=>'MAPIRIPANA
','fk_departaments_id'=>'15'],
            ['name'=>'SAN FELIPE
','fk_departaments_id'=>'15'],
            ['name'=>'PUERTO COLOMBIA
','fk_departaments_id'=>'15'],
            ['name'=>'LA GUADALUPE
','fk_departaments_id'=>'15'],
            ['name'=>'CACAHUAL
','fk_departaments_id'=>'15'],
            ['name'=>'PANA PANA
','fk_departaments_id'=>'15'],
            ['name'=>'MORICHAL
','fk_departaments_id'=>'15'],
            ['name'=>'SAN JOSE DEL GUAVIARE
','fk_departaments_id'=>'16'],
            ['name'=>'CALAMAR
','fk_departaments_id'=>'16'],
            ['name'=>'EL RETORNO
','fk_departaments_id'=>'16'],
            ['name'=>'MIRAFLORES
','fk_departaments_id'=>'16'],
            ['name'=>'NEIVA
','fk_departaments_id'=>'17'],
            ['name'=>'ACEVEDO
','fk_departaments_id'=>'17'],
            ['name'=>'AGRADO
','fk_departaments_id'=>'17'],
            ['name'=>'AIPE
','fk_departaments_id'=>'17'],
            ['name'=>'ALGECIRAS
','fk_departaments_id'=>'17'],
            ['name'=>'ALTAMIRA
','fk_departaments_id'=>'17'],
            ['name'=>'BARAYA
','fk_departaments_id'=>'17'],
            ['name'=>'CAMPOALEGRE
','fk_departaments_id'=>'17'],
            ['name'=>'COLOMBIA
','fk_departaments_id'=>'17'],
            ['name'=>'ELIAS
','fk_departaments_id'=>'17'],
            ['name'=>'GARZON
','fk_departaments_id'=>'17'],
            ['name'=>'GIGANTE
','fk_departaments_id'=>'17'],
            ['name'=>'GUADALUPE
','fk_departaments_id'=>'17'],
            ['name'=>'HOBO
','fk_departaments_id'=>'17'],
            ['name'=>'IQUIRA
','fk_departaments_id'=>'17'],
            ['name'=>'ISNOS
','fk_departaments_id'=>'17'],
            ['name'=>'LA ARGENTINA
','fk_departaments_id'=>'17'],
            ['name'=>'LA PLATA
','fk_departaments_id'=>'17'],
            ['name'=>'NATAGA
','fk_departaments_id'=>'17'],
            ['name'=>'OPORAPA
','fk_departaments_id'=>'17'],
            ['name'=>'PAICOL
','fk_departaments_id'=>'17'],
            ['name'=>'PALERMO
','fk_departaments_id'=>'17'],
            ['name'=>'PALESTINA
','fk_departaments_id'=>'17'],
            ['name'=>'PITAL
','fk_departaments_id'=>'17'],
            ['name'=>'PITALITO
','fk_departaments_id'=>'17'],
            ['name'=>'RIVERA
','fk_departaments_id'=>'17'],
            ['name'=>'SALADOBLANCO
','fk_departaments_id'=>'17'],
            ['name'=>'SAN AGUSTIN
','fk_departaments_id'=>'17'],
            ['name'=>'SANTA MARIA
','fk_departaments_id'=>'17'],
            ['name'=>'SUAZA
','fk_departaments_id'=>'17'],
            ['name'=>'TARQUI
','fk_departaments_id'=>'17'],
            ['name'=>'TESALIA
','fk_departaments_id'=>'17'],
            ['name'=>'TELLO
','fk_departaments_id'=>'17'],
            ['name'=>'TERUEL
','fk_departaments_id'=>'17'],
            ['name'=>'TIMANA
','fk_departaments_id'=>'17'],
            ['name'=>'VILLAVIEJA
','fk_departaments_id'=>'17'],
            ['name'=>'YAGUARA
','fk_departaments_id'=>'17'],
            ['name'=>'RIOHACHA
','fk_departaments_id'=>'18'],
            ['name'=>'ALBANIA
','fk_departaments_id'=>'18'],
            ['name'=>'BARRANCAS
','fk_departaments_id'=>'18'],
            ['name'=>'DIBULLA
','fk_departaments_id'=>'18'],
            ['name'=>'DISTRACCION
','fk_departaments_id'=>'18'],
            ['name'=>'EL MOLINO
','fk_departaments_id'=>'18'],
            ['name'=>'FONSECA
','fk_departaments_id'=>'18'],
            ['name'=>'HATONUEVO
','fk_departaments_id'=>'18'],
            ['name'=>'LA JAGUA DEL PILAR
','fk_departaments_id'=>'18'],
            ['name'=>'MAICAO
','fk_departaments_id'=>'18'],
            ['name'=>'MANAURE
','fk_departaments_id'=>'18'],
            ['name'=>'SAN JUAN DEL CESAR
','fk_departaments_id'=>'18'],
            ['name'=>'URIBIA
','fk_departaments_id'=>'18'],
            ['name'=>'URUMITA
','fk_departaments_id'=>'18'],
            ['name'=>'VILLANUEVA
','fk_departaments_id'=>'18'],
            ['name'=>'SANTA MARTA
','fk_departaments_id'=>'19'],
            ['name'=>'ALGARROBO
','fk_departaments_id'=>'19'],
            ['name'=>'ARACATACA
','fk_departaments_id'=>'19'],
            ['name'=>'ARIGUANI
','fk_departaments_id'=>'19'],
            ['name'=>'CERRO SAN ANTONIO
','fk_departaments_id'=>'19'],
            ['name'=>'CHIBOLO
','fk_departaments_id'=>'19'],
            ['name'=>'CIENAGA
','fk_departaments_id'=>'19'],
            ['name'=>'CONCORDIA
','fk_departaments_id'=>'19'],
            ['name'=>'EL BANCO
','fk_departaments_id'=>'19'],
            ['name'=>'EL PIÑON
','fk_departaments_id'=>'19'],
            ['name'=>'EL RETEN
','fk_departaments_id'=>'19'],
            ['name'=>'FUNDACION
','fk_departaments_id'=>'19'],
            ['name'=>'GUAMAL
','fk_departaments_id'=>'19'],
            ['name'=>'NUEVA GRANADA
','fk_departaments_id'=>'19'],
            ['name'=>'PEDRAZA
','fk_departaments_id'=>'19'],
            ['name'=>'PIJIÑO DEL CARMEN
','fk_departaments_id'=>'19'],
            ['name'=>'PIVIJAY
','fk_departaments_id'=>'19'],
            ['name'=>'PLATO
','fk_departaments_id'=>'19'],
            ['name'=>'PUEBLOVIEJO
','fk_departaments_id'=>'19'],
            ['name'=>'REMOLINO
','fk_departaments_id'=>'19'],
            ['name'=>'SABANAS DE SAN ANGEL
','fk_departaments_id'=>'19'],
            ['name'=>'SALAMINA
','fk_departaments_id'=>'19'],
            ['name'=>'SAN SEBASTIAN DE BUENAVISTA
','fk_departaments_id'=>'19'],
            ['name'=>'SAN ZENON
','fk_departaments_id'=>'19'],
            ['name'=>'SANTA ANA
','fk_departaments_id'=>'19'],
            ['name'=>'SANTA BARBARA DE PINTO
','fk_departaments_id'=>'19'],
            ['name'=>'SITIONUEVO
','fk_departaments_id'=>'19'],
            ['name'=>'TENERIFE
','fk_departaments_id'=>'19'],
            ['name'=>'ZAPAYAN
','fk_departaments_id'=>'19'],
            ['name'=>'ZONA BANANERA
','fk_departaments_id'=>'19'],
            ['name'=>'VILLAVICENCIO
','fk_departaments_id'=>'20'],
            ['name'=>'ACACIAS
','fk_departaments_id'=>'20'],
            ['name'=>'BARRANCA DE UPIA
','fk_departaments_id'=>'20'],
            ['name'=>'CABUYARO
','fk_departaments_id'=>'20'],
            ['name'=>'CASTILLA LA NUEVA
','fk_departaments_id'=>'20'],
            ['name'=>'CUBARRAL
','fk_departaments_id'=>'20'],
            ['name'=>'CUMARAL
','fk_departaments_id'=>'20'],
            ['name'=>'EL CALVARIO
','fk_departaments_id'=>'20'],
            ['name'=>'EL CASTILLO
','fk_departaments_id'=>'20'],
            ['name'=>'EL DORADO
','fk_departaments_id'=>'20'],
            ['name'=>'FUENTE DE ORO
','fk_departaments_id'=>'20'],
            ['name'=>'GRANADA
','fk_departaments_id'=>'20'],
            ['name'=>'GUAMAL
','fk_departaments_id'=>'20'],
            ['name'=>'MAPIRIPAN
','fk_departaments_id'=>'20'],
            ['name'=>'MESETAS
','fk_departaments_id'=>'20'],
            ['name'=>'LA MACARENA
','fk_departaments_id'=>'20'],
            ['name'=>'URIBE
','fk_departaments_id'=>'20'],
            ['name'=>'LEJANIAS
','fk_departaments_id'=>'20'],
            ['name'=>'PUERTO CONCORDIA
','fk_departaments_id'=>'20'],
            ['name'=>'PUERTO GAITAN
','fk_departaments_id'=>'20'],
            ['name'=>'PUERTO LOPEZ
','fk_departaments_id'=>'20'],
            ['name'=>'PUERTO LLERAS
','fk_departaments_id'=>'20'],
            ['name'=>'PUERTO RICO
','fk_departaments_id'=>'20'],
            ['name'=>'RESTREPO
','fk_departaments_id'=>'20'],
            ['name'=>'SAN CARLOS DE GUAROA
','fk_departaments_id'=>'20'],
            ['name'=>'SAN JUAN DE ARAMA
','fk_departaments_id'=>'20'],
            ['name'=>'SAN JUANITO
','fk_departaments_id'=>'20'],
            ['name'=>'SAN MARTIN
','fk_departaments_id'=>'20'],
            ['name'=>'VISTAHERMOSA
','fk_departaments_id'=>'20'],
            ['name'=>'PASTO
','fk_departaments_id'=>'21'],
            ['name'=>'ALBAN
','fk_departaments_id'=>'21'],
            ['name'=>'ALDANA
','fk_departaments_id'=>'21'],
            ['name'=>'ANCUYA
','fk_departaments_id'=>'21'],
            ['name'=>'ARBOLEDA
','fk_departaments_id'=>'21'],
            ['name'=>'BARBACOAS
','fk_departaments_id'=>'21'],
            ['name'=>'BELEN
','fk_departaments_id'=>'21'],
            ['name'=>'BUESACO
','fk_departaments_id'=>'21'],
            ['name'=>'COLON
','fk_departaments_id'=>'21'],
            ['name'=>'CONSACA
','fk_departaments_id'=>'21'],
            ['name'=>'CONTADERO
','fk_departaments_id'=>'21'],
            ['name'=>'CORDOBA
','fk_departaments_id'=>'21'],
            ['name'=>'CUASPUD
','fk_departaments_id'=>'21'],
            ['name'=>'CUMBAL
','fk_departaments_id'=>'21'],
            ['name'=>'CUMBITARA
','fk_departaments_id'=>'21'],
            ['name'=>'CHACHAGsI
','fk_departaments_id'=>'21'],
            ['name'=>'EL CHARCO
','fk_departaments_id'=>'21'],
            ['name'=>'EL PEÑOL
','fk_departaments_id'=>'21'],
            ['name'=>'EL ROSARIO
','fk_departaments_id'=>'21'],
            ['name'=>'EL TABLON DE GOMEZ
','fk_departaments_id'=>'21'],
            ['name'=>'EL TAMBO
','fk_departaments_id'=>'21'],
            ['name'=>'FUNES
','fk_departaments_id'=>'21'],
            ['name'=>'GUACHUCAL
','fk_departaments_id'=>'21'],
            ['name'=>'GUAITARILLA
','fk_departaments_id'=>'21'],
            ['name'=>'GUALMATAN
','fk_departaments_id'=>'21'],
            ['name'=>'ILES
','fk_departaments_id'=>'21'],
            ['name'=>'IMUES
','fk_departaments_id'=>'21'],
            ['name'=>'IPIALES
','fk_departaments_id'=>'21'],
            ['name'=>'LA CRUZ
','fk_departaments_id'=>'21'],
            ['name'=>'LA FLORIDA
','fk_departaments_id'=>'21'],
            ['name'=>'LA LLANADA
','fk_departaments_id'=>'21'],
            ['name'=>'LA TOLA
','fk_departaments_id'=>'21'],
            ['name'=>'LA UNION
','fk_departaments_id'=>'21'],
            ['name'=>'LEIVA
','fk_departaments_id'=>'21'],
            ['name'=>'LINARES
','fk_departaments_id'=>'21'],
            ['name'=>'LOS ANDES
','fk_departaments_id'=>'21'],
            ['name'=>'MAGsI
','fk_departaments_id'=>'21'],
            ['name'=>'MALLAMA
','fk_departaments_id'=>'21'],
            ['name'=>'MOSQUERA
','fk_departaments_id'=>'21'],
            ['name'=>'NARIÑO
','fk_departaments_id'=>'21'],
            ['name'=>'OLAYA HERRERA
','fk_departaments_id'=>'21'],
            ['name'=>'OSPINA
','fk_departaments_id'=>'21'],
            ['name'=>'OSPINA
','fk_departaments_id'=>'21'],
            ['name'=>'FRANCISCO PIZARRO
','fk_departaments_id'=>'21'],
            ['name'=>'POLICARPA
','fk_departaments_id'=>'21'],
            ['name'=>'POTOSI
','fk_departaments_id'=>'21'],
            ['name'=>'PROVIDENCIA
','fk_departaments_id'=>'21'],
            ['name'=>'PUERRES
','fk_departaments_id'=>'21'],
            ['name'=>'PUPIALES
','fk_departaments_id'=>'21'],
            ['name'=>'RICAURTE
','fk_departaments_id'=>'21'],
            ['name'=>'ROBERTO PAYAN
','fk_departaments_id'=>'21'],
            ['name'=>'SAMANIEGO
','fk_departaments_id'=>'21'],
            ['name'=>'SANDONA
','fk_departaments_id'=>'21'],
            ['name'=>'SAN BERNARDO
','fk_departaments_id'=>'21'],
            ['name'=>'SAN LORENZO
','fk_departaments_id'=>'21'],
            ['name'=>'SAN PABLO
','fk_departaments_id'=>'21'],
            ['name'=>'SAN PEDRO DE CARTAGO
','fk_departaments_id'=>'21'],
            ['name'=>'SANTA BARBARA
','fk_departaments_id'=>'21'],
            ['name'=>'SANTACRUZ
','fk_departaments_id'=>'21'],
            ['name'=>'SAPUYES
','fk_departaments_id'=>'21'],
            ['name'=>'TAMINANGO
','fk_departaments_id'=>'21'],
            ['name'=>'TANGUA
','fk_departaments_id'=>'21'],
            ['name'=>'SAN ANDRES DE TUMACO
','fk_departaments_id'=>'21'],
            ['name'=>'TUQUERRES
','fk_departaments_id'=>'21'],
            ['name'=>'YACUANQUER
','fk_departaments_id'=>'21'],
            ['name'=>'CUCUTA
','fk_departaments_id'=>'22'],
            ['name'=>'ABREGO
','fk_departaments_id'=>'22'],
            ['name'=>'ARBOLEDAS
','fk_departaments_id'=>'22'],
            ['name'=>'BOCHALEMA
','fk_departaments_id'=>'22'],
            ['name'=>'BUCARASICA
','fk_departaments_id'=>'22'],
            ['name'=>'CACOTA
','fk_departaments_id'=>'22'],
            ['name'=>'CACHIRA
','fk_departaments_id'=>'22'],
            ['name'=>'CHINACOTA
','fk_departaments_id'=>'22'],
            ['name'=>'CHITAGA
','fk_departaments_id'=>'22'],
            ['name'=>'CONVENCION
','fk_departaments_id'=>'22'],
            ['name'=>'CUCUTILLA
','fk_departaments_id'=>'22'],
            ['name'=>'DURANIA
','fk_departaments_id'=>'22'],
            ['name'=>'EL CARMEN
','fk_departaments_id'=>'22'],
            ['name'=>'EL TARRA
','fk_departaments_id'=>'22'],
            ['name'=>'EL ZULIA
','fk_departaments_id'=>'22'],
            ['name'=>'GRAMALOTE
','fk_departaments_id'=>'22'],
            ['name'=>'HACARI
','fk_departaments_id'=>'22'],
            ['name'=>'HERRAN
','fk_departaments_id'=>'22'],
            ['name'=>'LABATECA','fk_departaments_id'=>'22'],
            ['name'=>'LA ESPERANZA
','fk_departaments_id'=>'22'],
            ['name'=>'LA PLAYA
','fk_departaments_id'=>'22'],
            ['name'=>'LOS PATIOS
','fk_departaments_id'=>'22'],
            ['name'=>'LOURDES
','fk_departaments_id'=>'22'],
            ['name'=>'MUTISCUA
','fk_departaments_id'=>'22'],
            ['name'=>'OCAÑA
','fk_departaments_id'=>'22'],
            ['name'=>'PAMPLONA
','fk_departaments_id'=>'22'],
            ['name'=>'PAMPLONITA
','fk_departaments_id'=>'22'],
            ['name'=>'PUERTO SANTANDER
','fk_departaments_id'=>'22'],
            ['name'=>'RAGONVALIA
','fk_departaments_id'=>'22'],
            ['name'=>'SALAZAR
','fk_departaments_id'=>'22'],
            ['name'=>'SAN CALIXTO
','fk_departaments_id'=>'22'],
            ['name'=>'SAN CAYETANO
','fk_departaments_id'=>'22'],
            ['name'=>'SANTIAGO
','fk_departaments_id'=>'22'],
            ['name'=>'SARDINATA
','fk_departaments_id'=>'22'],
            ['name'=>'SILOS
','fk_departaments_id'=>'22'],
            ['name'=>'TEORAMA
','fk_departaments_id'=>'22'],
            ['name'=>'TIBU
','fk_departaments_id'=>'22'],
            ['name'=>'TOLEDO
','fk_departaments_id'=>'22'],
            ['name'=>'VILLA CARO
','fk_departaments_id'=>'22'],
            ['name'=>'VILLA DEL ROSARIO
','fk_departaments_id'=>'22'],
            ['name'=>'MOCOA
','fk_departaments_id'=>'23'],
            ['name'=>'COLON
','fk_departaments_id'=>'23'],
            ['name'=>'ORITO
','fk_departaments_id'=>'23'],
            ['name'=>'PUERTO ASIS
','fk_departaments_id'=>'23'],
            ['name'=>'PUERTO CAICEDO
','fk_departaments_id'=>'23'],
            ['name'=>'PUERTO GUZMAN
','fk_departaments_id'=>'23'],
            ['name'=>'LEGUIZAMO
','fk_departaments_id'=>'23'],
            ['name'=>'SIBUNDOY
','fk_departaments_id'=>'23'],
            ['name'=>'SAN FRANCISCO
','fk_departaments_id'=>'23'],
            ['name'=>'SAN MIGUEL
','fk_departaments_id'=>'23'],
            ['name'=>'SANTIAGO
','fk_departaments_id'=>'23'],
            ['name'=>'VALLE DEL GUAMUEZ
','fk_departaments_id'=>'23'],
            ['name'=>'VILLAGARZON
','fk_departaments_id'=>'23'],
            ['name'=>'','fk_departaments_id'=>'24'],




































        ],
            ['name','fk_departaments_id']
        );
    }
}
