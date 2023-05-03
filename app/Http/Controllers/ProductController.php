<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class ProductController extends Controller
{
    public function detail(String $idhobi){
        $detailhobi = [
            ['idhobi' => '1',
            'namahobi' => 'PLAYING MUSICAL INSTRUMENTS',
            'deskripsihobi-pendek' => 'Playing a musical instrument is a fun activity where one can play his favorite musical instrument to produce a harmonious and melodious sound.',
            'tingkatanhobi' => 'favourite',
            'pricehobi' => '5.000.000',
            'image-hobi' => 'piano.jpg' ,
            'deskripsihobi-panjang' => '
            Playing a musical instrument involves producing sound using a device designed to create musical tones. This can be done using a variety of techniques, depending on the type of instrument being played. Learning to play a musical instrument requires practice and dedication, as well as an understanding of music theory and basic techniques. With consistent practice and proper technique, a player can develop the skills needed to create music and express themselves through their instrument. In addition to the physical act of playing the instrument, musicians also need to develop their listening skills, as well as their ability to read sheet music or play by ear. This allows them to not only perform music written by others, but also to create their own music and collaborate with other musicians. Overall, playing a musical instrument can be a rewarding and enriching experience, allowing musicians to express themselves creatively, connect with others through music, and bring joy and beauty to the world.'],

            ['idhobi' => '2',
            'namahobi' => 'SINGING',
            'deskripsihobi-pendek' => 'Singing is a fun activity where one can sing his favorite song using the right voice and vocal technique.',
            'tingkatanhobi' => 'favourite',
            'pricehobi' => '2.000.000',
            'image-hobi' => 'singer.jpg' ,
            'deskripsihobi-panjang' => '
            Singing is the act of producing musical sounds and tones using the human voice. It involves using the breath to create vocal vibrations that produce various pitches and tones, resulting in melodies and harmonies. To sing, one must use proper breathing techniques to support the voice and produce a clear, strong sound. This involves taking deep breaths and exhaling slowly while controlling the flow of air through the vocal cords. In addition to technical skills, singers also need to have a good sense of pitch and rhythm, as well as an understanding of musical phrasing and dynamics. This allows them to interpret and express the emotions and meaning of a song through their voice. Singing can be done as a solo performance, or as part of a group or choir. It can also be done in a variety of musical styles, such as pop, rock, classical, jazz, and many others. Overall, singing can be a powerful and emotional form of expression, allowing singers to connect with others and convey a wide range of emotions through their voice.'],

            ['idhobi' => '3',
            'namahobi' => 'WRITING POEMS',
            'deskripsihobi-pendek' => 'Writing poetry is a creative activity in which a person can express his feelings and thoughts into beautiful and meaningful poetry.',
            'tingkatanhobi' => 'like',
            'pricehobi' => '500.000',
            'image-hobi' => 'writers.jpg' ,
            'deskripsihobi-panjang' => '
            Writing a poem involves using words and language to express thoughts, emotions, and ideas in a creative and artistic way. Poems can take on many different forms, such as sonnets, haikus, free verse, or limericks, and can cover a wide range of topics and themes. The process of writing a poem typically involves choosing a subject or theme, and then brainstorming ideas and images that relate to that subject. The poet may then experiment with different forms and structures, such as meter and rhyme, to create a unique and compelling poem. Writing a poem can be a deeply personal and cathartic experience for the poet, allowing them to express their thoughts and emotions in a way that is both creative and meaningful. Poems can also have a powerful impact on readers, inspiring them, provoking thought, and stirring emotions. Overall, writing a poem requires a love of language and a willingness to experiment with words and forms to create something unique and beautiful. With practice and dedication, anyone can learn to write poetry and enjoy the many rewards of this art form.'],

            ['idhobi' => '4',
            'namahobi' => 'PHOTOGRAPHY',
            'deskripsihobi-pendek' => 'Photography is a fun activity where one can take interesting pictures or photos using a camera or other photographic device.',
            'tingkatanhobi' => 'enjoy',
            'pricehobi' => '3.000.000',
            'image-hobi' => 'photo.jpg' ,
            'deskripsihobi-panjang' => '
            Photography is the art and practice of capturing and creating images using a camera. It involves the use of light and composition to capture a moment, tell a story, or evoke a feeling. Photography can be used to document events, capture beautiful landscapes or portraits, or even to create abstract or surreal images. The photographer must have an eye for detail and a creative vision to capture a unique and interesting photograph. Photography can be done using various types of cameras, including digital and film, and can be edited using software such as Adobe Photoshop or Lightroom to enhance or modify the image. Photography can be a hobby, a profession, or a means of self-expression. It allows photographers to capture and preserve moments in time, create art, and communicate a message to the viewer. Photographs can evoke emotions, tell a story, or provide a new perspective on the world around us. Overall, photography is a creative and rewarding art form that allows photographers to capture the beauty and complexity of the world around them.'],

            ['idhobi' => '5',
            'namahobi' => 'TRAVELLING',
            'deskripsihobi-pendek' => 'Traveling is a fun activity where one can visit new places to explore the beauty of nature, culture and interesting tourist spots.',
            'tingkatanhobi' => 'enjoy',
            'pricehobi' => '6.000.000',
            'image-hobi' => 'traveller.jpg' ,
            'deskripsihobi-panjang' => '
            Travelling is the act of moving from one place to another for the purpose of exploration, discovery, relaxation, or adventure. It can involve traveling to nearby destinations or exploring faraway places around the world.Travelling can be done by various modes of transportation, such as planes, trains, automobiles, boats, or even walking. The experience of traveling can be both exciting and rewarding, offering opportunities to learn about new cultures, meet new people, and gain a broader perspective on the world. Travelling can also have a positive impact on personal growth and development, fostering independence, self-discovery, and cultural understanding. It can broaden ones perspective, challenge preconceived notions, and promote empathy and compassion for others. However, traveling also involves taking certain precautions and being aware of potential risks, such as illness, theft, or cultural misunderstandings. It is important to research and plan ahead to ensure a safe and enjoyable travel experience. Overall, traveling is a rewarding and enriching experience that allows us to explore the world and learn about ourselves and others. Whether for leisure or personal growth, traveling offers a unique opportunity to create lasting memories and gain new insights into the world around us.'],

            ['idhobi' => '6',
            'namahobi' => 'WATCHING MOVIES',
            'deskripsihobi-pendek' => 'Watching movies is a fun activity where one can enjoy the story, acting, and visual effects in a film or film.',
            'tingkatanhobi' => 'like',
            'pricehobi' => '6.000.000',
            'image-hobi' => 'watch.jpg' ,
            'deskripsihobi-panjang' => '
            Travelling is the act of moving from one place to another for the purpose of exploration, discovery, relaxation, or adventure. It can involve traveling to nearby destinations or exploring faraway places around the world.Travelling can be done by various modes of transportation, such as planes, trains, automobiles, boats, or even walking. The experience of traveling can be both exciting and rewarding, offering opportunities to learn about new cultures, meet new people, and gain a broader perspective on the world. Travelling can also have a positive impact on personal growth and development, fostering independence, self-discovery, and cultural understanding. It can broaden ones perspective, challenge preconceived notions, and promote empathy and compassion for others. However, traveling also involves taking certain precautions and being aware of potential risks, such as illness, theft, or cultural misunderstandings. It is important to research and plan ahead to ensure a safe and enjoyable travel experience. Overall, traveling is a rewarding and enriching experience that allows us to explore the world and learn about ourselves and others. Whether for leisure or personal growth, traveling offers a unique opportunity to create lasting memories and gain new insights into the world around us.']
        ];
        return view('penjelasan', compact('detailhobi', 'idhobi'));

    }

    public function show (){
        $listhobi = [
            ['idhobi' => '1',
            'tingkatanhobi' => 'favourite',
            'namahobi' => 'PLAYING MUSICAL INSTRUMENTS',
            'iconhobi' => 'music-note-list.svg',
            'deskripsihobi-pendek' => 'Playing a musical instrument is a fun activity where one can play his favorite musical instrument to produce a harmonious and melodious sound.'],

            ['idhobi' => '2',
            'tingkatanhobi' => 'favourite',
            'namahobi' => 'SINGING',
            'iconhobi' => 'mic.svg',
            'deskripsihobi-pendek' => 'Singing is a fun activity where one can sing his favorite song using the right voice and vocal technique.'],

            ['idhobi' => '3',
            'namahobi' => 'WRITING POEMS',
            'tingkatanhobi' => 'like',
            'iconhobi' => 'body-text.svg',
            'deskripsihobi-pendek' => 'Writing poetry is a creative activity in which a person can express his feelings and thoughts into beautiful and meaningful poetry.'],

            ['idhobi' => '4',
            'namahobi' => 'PHOTOGRAPHY',
            'tingkatanhobi' => 'enjoy',
            'iconhobi' => 'camera.svg',
            'deskripsihobi-pendek' => 'Photography is a fun activity where one can take interesting pictures or photos using a camera or other photographic device.'],

            ['idhobi' => '5',
            'namahobi' => 'TRAVELLING',
            'tingkatanhobi' => 'enjoy',
            'iconhobi' => 'airplane.svg',
            'deskripsihobi-pendek' => 'Traveling is a fun activity where one can visit new places to explore the beauty of nature, culture and interesting tourist spots.'],

            ['idhobi' => '6',
            'tingkatanhobi' => 'like',
            'namahobi' => 'WATCHING MOVIES',
            'iconhobi' => 'film.svg',
            'deskripsihobi-pendek' => 'Watching movies is a fun activity where one can enjoy the story, acting, and visual effects in a film or film.']
        ];
        return view ('profile', compact('listhobi'));
    }
}
