import './bootstrap';

// Definición de los textos en alemán y español

const englishText= `As every kid, we believe.
In possibilities, in magic, in smiles.
Later, life goes by.
Observing and learning the rules of the structure. How to process information, how to relate, and also how to think and play. Maybe not a conscious process, but as when we were new to computers, we installed a lot of programs without knowing quite much about them.
That's life.
I think everyone should create their tools to be able to develop themselves. Your way of how you process the info into dreams or goals you aim for. This site is developed with another way of thinking.
Maybe too philosophical. But don't forget most majors developments came from some idea most people couldn't comprehend until it was real.
This is it.
It has more than just to share. It's to create a database in the cloud full of positive and encouraging intentions, dreams, and so on. Like a pyramid in the middle of the desert that reflects into the galaxy.
The cloud.`
const germanText = `Wie jedes Kind glauben auch wir.
An Möglichkeiten, an Magie, an ein Lächeln.
Später geht das Leben vorbei.
Wir beobachten und lernen die Regeln der Struktur. Wie man Informationen verarbeitet, wie man Beziehungen herstellt und auch wie man denkt und spielt. Vielleicht kein bewusster Prozess, aber so wie wir, als wir neu am Computer waren, viele Programme installiert haben, ohne viel darüber zu wissen.
So ist das Leben.
Ich denke, jeder sollte sich seine eigenen Werkzeuge schaffen, um sich weiterentwickeln zu können. So, wie Sie die Informationen zu Träumen oder Zielen verarbeiten, die Sie anstreben. Diese Seite ist mit einer anderen Denkweise entwickelt worden.
Vielleicht zu philosophisch. Aber vergessen Sie nicht, dass die meisten großen Entwicklungen aus einer Idee entstanden sind, die die meisten Menschen nicht begreifen konnten, bis sie real war.
Das ist sie.
Es hat mehr als nur zu teilen. Es geht darum, in der Wolke eine Datenbank voller positiver und ermutigender Absichten, Träume und so weiter zu schaffen. Wie eine Pyramide in der Mitte der Wüste, die in die Galaxie reflektiert.
Die Wolke.`;

const spanishText = `Como todos los niños, creemos.
En las posibilidades, en la magia, en las sonrisas.
Más tarde, la vida transcurre.
Observando y aprendiendo las reglas de la estructura. Cómo procesar la información, cómo relacionarnos, y también cómo pensar y jugar. Tal vez no sea un proceso consciente, pero como cuando éramos novatos en informática, instalamos un montón de programas sin saber demasiado sobre ellos.
Así es la vida.
Creo que cada uno debe crear sus herramientas para poder desarrollarse. Su manera de como procesa la info en sueños o metas que se propone. Este sitio esta desarrollado con otra forma de pensar.
Quizás demasiado filosófico. Pero no olvides que la mayoría de los grandes desarrollos vinieron de alguna idea que la mayoría de la gente no podía comprender hasta que fue real.
Esto es así.
Tiene algo más que compartir. Es crear una base de datos en la nube llena de intenciones positivas y alentadoras, sueños, etcétera. Como una pirámide en medio del desierto que se refleja en la galaxia.
La nube.`;

// JavaScript para cambiar el texto dinámicamente
document.addEventListener('DOMContentLoaded', function() {
    const flagButtons = document.querySelectorAll('.nav_button_flag');
    const dynamicText = document.getElementById('dynamicText');

    flagButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Agregamos la clase para el efecto de fade-out
            dynamicText.classList.add('fade-out');

            // Esperamos un momento antes de cambiar el texto y quitar la clase
            setTimeout(() => {
                const lang = this.getAttribute('data-lang');
                switch (lang) {
                    case 'german':
                        dynamicText.innerHTML = germanText;
                        break;
                    case 'spanish':
                        dynamicText.innerHTML = spanishText;
                        break;
                    case 'english':
                        dynamicText.innerHTML = englishText;
                        break;
                    default:
                        dynamicText.innerHTML = ''; // Manejar otros idiomas si es necesario
                        break;
                }

                // Quitamos la clase para iniciar el fade-in
                dynamicText.classList.remove('fade-out');
            }, 400); // 0.4 segundos (400 milisegundos), igual a la duración de la transición en CSS
        });
    });
});