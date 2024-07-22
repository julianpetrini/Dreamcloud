<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class blogs extends Seeder
{
    /*  
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = [
            ['author' => 'ES', 'title' => '', 'content' => 'El verdadero poder no está en lo que puedes hacer, sino en lo que decides ser.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'Cada amanecer es un nuevo hechizo para reinventarte.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El oro más valioso se encuentra en el corazón de los que sueñan.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El conocimiento es la chispa que enciende la llama de la sabiduría.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'Un deseo sin acción es solo un sueño; actúa y verás la magia suceder.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El universo conspira a favor de aquellos que buscan la verdad con humildad.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'Cada desafío es una oportunidad disfrazada de prueba.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La magia verdadera reside en el valor de enfrentar lo desconocido.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El futuro pertenece a quienes creen en la belleza de sus visiones.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'No busques fuera lo que ya tienes dentro: el poder de cambiar tu destino.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La paciencia es la alquimia que transforma la dificultad en fortaleza.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El amor es el ingrediente secreto en todas las pociones de éxito.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El coraje es la clave que abre las puertas de lo imposible.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'A veces, los caminos más oscuros llevan a los destinos más brillantes.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El conocimiento se multiplica cuando se comparte.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La fe en ti mismo es el conjuro más poderoso que puedes lanzar.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La sabiduría se cultiva con cada pregunta que te atreves a hacer.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El pasado es un pergamino, aprende de él, pero no te encadenes.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La creatividad es la varita mágica que transforma lo ordinario en extraordinario.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El respeto hacia los demás es el verdadero lenguaje universal de la magia.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'Cada día es una nueva página en el gran libro de tu vida.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La gratitud es la magia que atrae más cosas buenas a tu vida.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El poder de una sonrisa puede iluminar incluso el corazón más sombrío.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La perseverancia es la piedra filosofal que convierte los sueños en realidad.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La verdad siempre encuentra su camino, como un río que fluye hacia el mar.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La magia de la vida está en aprender a bailar bajo la lluvia.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El equilibrio entre la mente y el corazón es la fórmula secreta de la paz interior.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'Las palabras tienen poder; úsalas para construir, no para destruir.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El perdón es la magia que libera el alma y enciende la esperanza.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La intuición es la brújula interna que siempre te guiará hacia tu verdadero norte.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'Cada acto de bondad es un hechizo que transforma el mundo.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El autoconocimiento es el elixir de la auténtica libertad.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'Los límites existen solo en la mente, atrévete a superarlos.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El presente es el único momento donde la magia de la vida ocurre.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La simplicidad es la clave de la verdadera grandeza.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La confianza en uno mismo es el primer paso hacia cualquier logro.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El respeto por la naturaleza es el respeto por nosotros mismos.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La vida es el mayor de los misterios, disfrútala con asombro y curiosidad.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'El amor propio es el primer capítulo de la historia del éxito.', 'postPic' => ''],
            ['author' => 'ES', 'title' => '', 'content' => 'La transformación personal es la magia que cambia el mundo desde dentro.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'True power lies not in what you can do, but in what you decide to be.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Each dawn is a new spell to reinvent yourself.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'The most valuable gold is found in the hearts of those who dream.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Knowledge is the spark that ignites the flame of wisdom.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'A wish without action is just a dream; act and you will see the magic happen.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'The universe conspires in favor of those who seek the truth with humility.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Every challenge is an opportunity disguised as a test.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'True magic lies in the courage to face the unknown.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'The future belongs to those who believe in the beauty of their visions.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Do not seek outside what you already have within: the power to change your destiny.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Patience is the alchemy that transforms difficulty into strength.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Love is the secret ingredient in all potions of success.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Courage is the key that opens the doors of the impossible.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Sometimes the darkest paths lead to the brightest destinations.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Knowledge multiplies when it is shared.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Faith in yourself is the most powerful spell you can cast.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Wisdom is cultivated with every question you dare to ask.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'The past is a scroll; learn from it, but do not be chained by it.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Creativity is the magic wand that transforms the ordinary into the extraordinary.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Respect for others is the true universal language of magic.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Each day is a new page in the grand book of your life.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Gratitude is the magic that attracts more good things into your life.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'The power of a smile can light up even the darkest heart.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Perseverance is the philosopher’s stone that turns dreams into reality.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Truth always finds its way, like a river flowing to the sea.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'The magic of life lies in learning to dance in the rain.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'The balance between mind and heart is the secret formula for inner peace.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Words have power; use them to build, not to destroy.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Forgiveness is the magic that frees the soul and ignites hope.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Intuition is the inner compass that will always guide you to your true north.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Every act of kindness is a spell that transforms the world.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Self-knowledge is the elixir of true freedom.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Limits exist only in the mind; dare to overcome them.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'The present is the only moment where the magic of life happens.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Simplicity is the key to true greatness.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Self-confidence is the first step to every achievement.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Respect for nature is respect for ourselves.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Life is the greatest mystery; enjoy it with wonder and curiosity.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Self-love is the first chapter in the story of success.', 'postPic' => ''],
            ['author' => 'EN', 'title' => '', 'content' => 'Personal transformation is the magic that changes the world from within.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Wahre Macht liegt nicht in dem, was du tun kannst, sondern in dem, was du entscheidest zu sein.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Jeder Morgen ist ein neuer Zauber, um dich neu zu erfinden.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Das wertvollste Gold findet man in den Herzen derer, die träumen.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Wissen ist der Funke, der die Flamme der Weisheit entzündet.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Ein Wunsch ohne Handlung ist nur ein Traum; handle und du wirst die Magie sehen.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Das Universum verschwört sich zugunsten derjenigen, die die Wahrheit mit Demut suchen.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Jede Herausforderung ist eine Gelegenheit, die als Prüfung getarnt ist.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Wahre Magie liegt im Mut, dem Unbekannten entgegenzutreten.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Die Zukunft gehört denen, die an die Schönheit ihrer Visionen glauben.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Suche nicht außerhalb, was du bereits in dir hast: die Kraft, dein Schicksal zu verändern.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Geduld ist die Alchemie, die Schwierigkeit in Stärke verwandelt.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Liebe ist die geheime Zutat in allen Erfolgstränken.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Mut ist der Schlüssel, der die Türen des Unmöglichen öffnet.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Manchmal führen die dunkelsten Wege zu den hellsten Zielen.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Wissen vervielfacht sich, wenn es geteilt wird.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Glaube an dich selbst ist der mächtigste Zauber, den du wirken kannst.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Weisheit wird mit jeder Frage kultiviert, die du zu stellen wagst.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Die Vergangenheit ist ein Pergament; lerne daraus, aber lasse dich nicht davon fesseln.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Kreativität ist der Zauberstab, der das Gewöhnliche in das Außergewöhnliche verwandelt.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Respekt gegenüber anderen ist die wahre universelle Sprache der Magie.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Jeder Tag ist eine neue Seite im großen Buch deines Lebens.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Dankbarkeit ist die Magie, die mehr gute Dinge in dein Leben zieht.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Die Macht eines Lächelns kann selbst das dunkelste Herz erhellen.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Ausdauer ist der Stein der Weisen, der Träume in Realität verwandelt.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Die Wahrheit findet immer ihren Weg, wie ein Fluss, der zum Meer fließt.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Die Magie des Lebens liegt darin, zu lernen, im Regen zu tanzen.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Das Gleichgewicht zwischen Geist und Herz ist die geheime Formel für inneren Frieden.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Worte haben Macht; benutze sie, um aufzubauen, nicht um zu zerstören.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Vergebung ist die Magie, die die Seele befreit und Hoffnung entzündet.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Intuition ist der innere Kompass, der dich immer zu deinem wahren Norden führen wird.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Jede Handlung der Freundlichkeit ist ein Zauber, der die Welt verwandelt.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Selbsterkenntnis ist das Elixier wahrer Freiheit.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Grenzen existieren nur im Kopf; wage es, sie zu überwinden.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Der gegenwärtige Moment ist der einzige Moment, in dem die Magie des Lebens passiert.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Einfachheit ist der Schlüssel zur wahren Größe.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Selbstvertrauen ist der erste Schritt zu jedem Erfolg.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Respekt vor der Natur ist Respekt vor uns selbst.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Das Leben ist das größte Geheimnis; genieße es mit Staunen und Neugier.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Selbstliebe ist das erste Kapitel in der Geschichte des Erfolgs.', 'postPic' => ''],
            ['author' => 'DEU', 'title' => '', 'content' => 'Die persönliche Transformation ist die Magie, die die Welt von innen heraus verändert.', 'postPic' => ''],
        ];

        DB::table('blogs')->insert($blogs);
    }
}