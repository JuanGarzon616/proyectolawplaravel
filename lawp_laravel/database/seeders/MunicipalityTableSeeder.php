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
            ['name'=>'','fk_departaments_id'=>'12'],






















        ],
            ['name','fk_departaments_id']
        );
    }
}
