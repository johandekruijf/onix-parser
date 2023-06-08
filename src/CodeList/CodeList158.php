<?php

namespace Ribal\Onix\CodeList;

/**
 * ONIX Code List 158
 *
 * Used with <ResourceContentType> <x436>
 *
 * @see https://ns.editeur.org/onix/en/158
 */
class CodeList158 extends CodeList implements CodeListInterface
{
	/**
	 * Code List 158 for en
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/en/158
	 */
	protected static $en = [
		'01' => 'Front cover',
		'02' => 'Back cover',
		'03' => 'Cover / pack',
		'04' => 'Contributor picture',
		'05' => 'Series image / artwork',
		'06' => 'Series logo',
		'07' => 'Product image / artwork',
		'08' => 'Product logo',
		'09' => 'Publisher logo',
		'10' => 'Imprint logo',
		'11' => 'Contributor interview',
		'12' => 'Contributor presentation',
		'13' => 'Contributor reading',
		'14' => 'Contributor event schedule',
		'15' => 'Sample content',
		'16' => 'Widget',
		'17' => 'Review',
		'18' => 'Commentary / discussion',
		'19' => 'Reading group guide',
		'20' => 'Teacher’s guide',
		'21' => 'Feature article',
		'22' => 'Character ‘interview’',
		'23' => 'Wallpaper / screensaver',
		'24' => 'Press release',
		'25' => 'Table of contents',
		'26' => 'Trailer',
		'27' => 'Cover thumbnail',
		'28' => 'Full content',
		'29' => 'Full cover',
		'30' => 'Master brand logo',
		'31' => 'Description',
		'32' => 'Index',
		'33' => 'Student’s guide',
		'34' => 'Publisher’s catalogue',
		'35' => 'Online advertisement panel',
		'36' => 'Online advertisement page',
		'37' => 'Promotional event material',
		'38' => 'Digital review copy',
		'39' => 'Instructional material',
		'40' => 'Errata',
		'41' => 'Introduction',
		'42' => 'Collection description',
		'43' => 'Bibliography',
		'44' => 'Abstract',
		'45' => 'Cover holding image',
		'46' => 'Rules or instructions',
		'47' => 'Transcript',
		'48' => 'Full cast and credit list',
		'99' => 'License',
	];

	/**
	 * Code List 158 for es
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/es/158
	 */
	protected static $es = [
		'01' => 'Cubierta',
		'02' => 'Contracubierta',
		'03' => 'Imagen / paquete',
		'04' => 'Imagen de autor, ilustrador…',
		'05' => 'Imagen de la colección',
		'06' => 'Logo de la colección',
		'07' => 'Imagen del producto',
		'08' => 'Logo del producto',
		'09' => 'Logo de la editorial',
		'10' => 'Logo del sello editorial',
		'11' => 'Entrevista con un autor, ilustrador…',
		'12' => 'Presentación de un autor, ilustrador…',
		'13' => 'Lectura por el autor, ilustrador, etc',
		'14' => 'Calendario de un evento con un autor',
		'15' => 'Muestra de contenido',
		'16' => '«Widget»',
		'17' => 'Crítica',
		'18' => 'Otro comentario / debate',
		'19' => 'Guía para un grupo de lectura',
		'20' => 'Guía para el profesor',
		'21' => 'Articulo de presentación',
		'22' => '«Entrevista» con un personaje',
		'23' => 'Salvapantallas / Fondo de pantalla',
		'24' => 'Nota de prensa',
		'25' => 'Tabla de contenidos / Tabla de materias',
		'26' => '«Trailer»',
		'27' => 'Miniatura de la cubierta',
		'28' => 'Contenido completo',
		'29' => 'Cubierta completa',
		'30' => 'Logo de una marca global («Master brand logo»)',
		'31' => 'Descripción',
		'32' => 'Índice',
		'33' => 'Guia del estudiante',
		'34' => 'Catálogo de la editorial',
		'35' => 'Panel publicitario online',
		'36' => 'Página publicitaria online',
		'37' => 'Material para evento promocional',
		'38' => 'Copia digital para evaluación / revisión',
		'39' => 'Material con instrucciones',
		'40' => 'Erratas',
		'41' => 'Introducción',
		'42' => 'Descripción de la colección',
		'43' => 'Bibliografía',
		'44' => 'Abstract / Resumen',
		'45' => 'Imagen de cubierta provisional',
		'46' => 'Reglas o instrucciones',
		'47' => 'Transcripción',
		'48' => 'Lista completa de reparto y créditos',
		'99' => 'Licencia',
	];

	/**
	 * Code List 158 for de
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/de/158
	 */
	protected static $de = [
		'01' => 'Front cover',
		'02' => 'Back cover',
		'03' => 'Cover / pack',
		'04' => 'Contributor picture',
		'05' => 'Series image / artwork',
		'06' => 'Series logo',
		'07' => 'Product image / artwork',
		'08' => 'Product logo',
		'09' => 'Publisher logo',
		'10' => 'Imprint logo',
		'11' => 'Contributor interview',
		'12' => 'Contributor presentation',
		'13' => 'Contributor reading',
		'14' => 'Contributor event schedule',
		'15' => 'Sample content',
		'16' => 'Widget',
		'17' => 'Review',
		'18' => 'Commentary / discussion',
		'19' => 'Reading group guide',
		'20' => 'Teacher’s guide',
		'21' => 'Feature article',
		'22' => 'Character ‘interview’',
		'23' => 'Wallpaper / screensaver',
		'24' => 'Press release',
		'25' => 'Table of contents',
		'26' => 'Trailer',
		'27' => 'Cover thumbnail',
		'28' => 'Full content',
		'29' => 'Full cover',
		'30' => 'Master brand logo',
		'31' => 'Description',
		'32' => 'Index',
		'33' => 'Student’s guide',
		'34' => 'Publisher’s catalogue',
		'35' => 'Online advertisement panel',
		'36' => 'Online advertisement page',
		'37' => 'Promotional event material',
		'38' => 'Digital review copy',
		'39' => 'Instructional material',
		'40' => 'Errata',
		'41' => 'Introduction',
		'42' => 'Collection description',
		'43' => 'Bibliography',
		'44' => 'Abstract',
		'45' => 'Cover holding image',
		'46' => 'Rules or instructions',
		'47' => 'Transcript',
		'48' => 'Full cast and credit list',
		'99' => 'License',
	];

	/**
	 * Code List 158 for fr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/fr/158
	 */
	protected static $fr = [
		'01' => '1re de couverture',
		'02' => '4e de couverture',
		'03' => 'Couverture / pack',
		'04' => 'Photo du contributeur',
		'05' => 'Image / illustration d’une collection',
		'06' => 'Logo d’une collection',
		'07' => 'Image / illustration d’un produit',
		'08' => 'Logo du produit',
		'09' => 'Logo de l’éditeur',
		'10' => 'Logo de la marque',
		'11' => 'Interview du contributeur',
		'12' => 'Présentation du contributeur',
		'13' => 'Lecture du contributeur',
		'14' => 'Agenda événementiel d’un contributeur',
		'15' => 'Exemple de contenu',
		'16' => '« Widget »',
		'17' => 'Critique',
		'18' => 'Autre commentaire / discussion',
		'19' => 'Description pour le Comité de lecture',
		'20' => 'Guide de l’enseignant',
		'21' => '« Chapeau promotionnel »',
		'22' => '« Interview » d’un personnage',
		'23' => 'Papier peint / écran de veille',
		'24' => 'Communiqué de presse',
		'25' => 'Table des matières',
		'26' => 'Bande-annonce',
		'27' => 'Vignette de couverture',
		'28' => 'Contenu intégral',
		'29' => 'Couverture complète',
		'30' => 'Logo de la marque principale',
		'31' => 'Description',
		'32' => 'Index',
		'33' => 'Guide de l’élève',
		'34' => 'Catalogue éditeur',
		'35' => 'Bannnière publicitaire en ligne',
		'36' => 'Page de publicité en ligne',
		'37' => 'Matériel promotionnel',
		'38' => 'Exemplaire électronique pour la révision',
		'39' => 'Matériel pédagogique',
		'40' => 'Errata',
		'41' => 'Introduction',
		'42' => 'Description de collection',
		'43' => 'Bibliographie',
		'44' => 'Abstract',
		'45' => 'Image de couverture de substitution',
		'46' => 'Règles ou instructions',
		'47' => 'Transcription',
		'48' => 'Distribution et générique',
		'99' => 'Licence',
	];

	/**
	 * Code List 158 for it
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/it/158
	 */
	protected static $it = [
		'01' => 'Copertina anteriore',
		'02' => 'Copertina posteriore',
		'03' => 'Copertina/confezione',
		'04' => 'Immagine dell’autore/contributore',
		'05' => 'Immagine/illustrazione della collana',
		'06' => 'Logo della serie',
		'07' => 'Immagine/illustrazione del prodotto',
		'08' => 'Logo del prodotto',
		'09' => 'Logo dell’editore',
		'10' => 'Logo del marchio editoriale',
		'11' => 'Intervista all’autore/contributore',
		'12' => 'Presentazione dell’autore/contributore',
		'13' => 'Lettura dell’autore/contributore',
		'14' => 'Calendario degli eventi dell’autore/contributore',
		'15' => 'Contenuto di esempio',
		'16' => 'Widget',
		'17' => 'Recensione',
		'18' => 'Altri commenti/discussioni',
		'19' => 'Guida ai gruppi di lettura',
		'20' => 'Guida dell’insegnante',
		'21' => 'Articolo di presentazione',
		'22' => 'Intervista al personaggio',
		'23' => 'Immagine di sfondo/salvaschermo',
		'24' => 'Comunicato stampa',
		'25' => 'Indice dei contenuti',
		'26' => 'Trailer',
		'27' => 'Miniatura della copertina',
		'28' => 'Intero contenuto',
		'29' => 'Copertina intera',
		'30' => 'Logo del brand principale',
		'31' => 'Descrizione',
		'32' => 'Indice',
		'33' => 'Guida per lo studente',
		'34' => 'Catalogo dell’editore',
		'35' => 'Pannello pubblicitario online',
		'36' => 'Pagina pubblicitaria online',
		'37' => 'Materiale per evento promozionale',
		'38' => 'Copia digitale per revisione',
		'39' => 'Materiale informativo',
		'40' => 'Errata corrige',
		'41' => 'Introduzione',
		'42' => 'Descrizione della collezione',
		'43' => 'Bibliografia',
		'44' => 'Abstract',
		'45' => 'Immagine temporanea della copertina',
		'46' => 'Regole o istruzioni',
		'47' => 'Trascrizione',
		'48' => 'Cast completo e credits',
		'99' => 'Licenza',
	];

	/**
	 * Code List 158 for nb
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/nb/158
	 */
	protected static $nb = [
		'01' => 'Omslagets forside',
		'02' => 'Omslagets bakside',
		'03' => 'Omslag / pakke',
		'04' => 'Bilde av bidragsyter',
		'05' => 'Seriebilde / kunstverk',
		'06' => 'Serielogo',
		'07' => 'Produktbilde / kunstverk',
		'08' => 'Produktlogo',
		'09' => 'Vareeiers logo',
		'10' => 'Forlagets logo',
		'11' => 'Intervju med bidragsyter',
		'12' => 'Presentasjon av bidragsyter',
		'13' => 'Bidragsyteren leser',
		'14' => 'Bidragsyters kalender',
		'15' => 'Innholdseksempel',
		'16' => 'Widget',
		'17' => 'Anmeldelse',
		'18' => 'Andre kommentarer / diskusjoner',
		'19' => 'Guide for lesesirkler',
		'20' => 'Lærerveiledning',
		'21' => 'Featureartikkel',
		'22' => 'Intervju med oppdiktet / skjønnlitterær person',
		'23' => 'Skjermsparer / bakgrunnsbilde',
		'24' => 'Pressemelding',
		'25' => 'Innholdsfortegnelse',
		'26' => 'Boktrailer',
		'27' => 'Miniatyrbilde (av omslaget)',
		'28' => 'Alt innhold',
		'29' => 'Komplett omslag',
		'30' => 'Merkevarelogo',
		'31' => 'Beskrivelse',
		'32' => 'Register',
		'33' => 'Studentguide',
		'34' => 'Utgivers katalog',
		'35' => 'Online bannerannonse',
		'36' => 'Online reklameside',
		'37' => 'Reklamekampanjemateriell',
		'38' => 'Digitalt anmeldereksemplar',
		'39' => 'Instruksjonsvideo',
		'40' => 'Errata',
		'41' => 'Introduksjon',
		'42' => 'Beskrivelse av samling/serie (collection)',
		'43' => 'Bibliografi',
		'44' => 'Sammendrag',
		'45' => 'Midlertidig bilde',
		'46' => 'Regler eller instruksjoner',
		'47' => 'Transkripsjon',
		'48' => 'Komplett rolle- og krediteringsliste',
		'99' => 'Lisens',
	];

	/**
	 * Code List 158 for tr
	 *
	 * @var array
	 * @see https://ns.editeur.org/onix/tr/158
	 */
	protected static $tr = [
		'01' => 'Ön kapak',
		'02' => 'Arka kapak',
		'03' => 'Kapak / ambalaj',
		'04' => 'Katkı sahibi resmi',
		'05' => 'Dizi resmi / görseli',
		'06' => 'Dizi logosu',
		'07' => 'Ürün resmi / görseli',
		'08' => 'Ürün logosu',
		'09' => 'Yayımcı logosu',
		'10' => 'Marka logosu',
		'11' => 'Katkı sahibiyle söyleşi',
		'12' => 'Katkı sahibi sunuşu',
		'13' => 'Katkı sahibi okuması',
		'14' => 'Katkı sahibi etkinlik takvimi',
		'15' => 'Örnek içerik',
		'16' => 'Widget',
		'17' => 'İnceleme',
		'18' => 'Diğer yorum / tartışma',
		'19' => 'Okuma grubu kılavuzu',
		'20' => 'Öğretmen kılavuzu',
		'21' => 'Makale',
		'22' => 'Kahramanla ‘söyleşi’',
		'23' => 'Duvar kağıdı / ekran koruyucu',
		'24' => 'Basın bülteni',
		'25' => 'İçindekiler tablosu',
		'26' => 'Trailer',
		'27' => 'Kapak küçük resmi',
		'28' => 'Tam içerik',
		'29' => 'Tam kapak',
		'30' => 'Ana marka logosu',
		'31' => 'Açıklama',
		'32' => 'Dizin',
		'33' => 'Student’s guide',
		'34' => 'Publisher’s catalogue',
		'35' => 'Online advertisement panel',
		'36' => 'Online advertisement page',
		'37' => 'Promotional event material',
		'38' => 'Digital review copy',
		'39' => 'Kullanma talimatı materyali',
		'40' => 'Errata (Doğru-yanlış listesi)',
		'41' => 'Giriş',
		'42' => 'Koleksiyon açıklaması',
		'43' => 'Bibliography',
		'44' => 'Abstract',
		'45' => 'Cover holding image',
		'46' => 'Rules or instructions',
		'47' => 'Transcript',
		'48' => 'Full cast and credit list',
		'99' => 'Lisans',
	];
}
