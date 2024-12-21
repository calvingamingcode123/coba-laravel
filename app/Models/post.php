<?php

namespace App\Models;


class post
{
    private static  $blog_about = [
    [
            "title" => "what is the kirara fantasia",
            "slug" => "Protagonis-and-antagonis-character",
            "author" => "profesor calvin",
            "body" => "Kirara Fantasia (きららファンタジア) was a free-to-play fantasy role-playing game developed by Drecom and Meteorise and published by Aniplex.
            The game crosses over characters from all Manga Time Kirara magazines including Manga Time Kirara, Manga Time Kirara Carat, Manga Time Kirara Max, Manga Time Kirara Forward and Manga Time Kirara Miracle!.
            The game was released in Japan for iOS and Android devices in Japan on December 11, 2017.
            The game ended service on February 28, 2023",
    ],
    [
        "title" => "synopsis part 1",
        "slug"=> "the Seven Sages",
        "author" => "profesor calvin",
        "body" => "the synopsis in this game is in 2 parts
        synopsis part 1
        One day, Archive, the chief priest who serves Sora, seals Sora and begins summoning the person described in the scriptures using her forbidden order. Without Sora, the scriptures would be gone.
        Lamp, a girl who witnessed the moment of her seal, summons a legendary summoner who can summon the character Cleamate of the scriptures that is the source of Clea in order to save Sora and her world with her companion match. Embark on a journey to find. Ramp, who left without thinking, gets stuck, but she gets help from a villager named Kirara.
        Kirara is the legendary summoner, and Lamp and others continue their journey with the summoned people to overthrow Archive."
    ],
        [
            "title" => "synopsis part 2",
            "slug"=> "The Realistis",
            "author" => "profesor calvin",
            "body" => "The incident caused by Archive is cleared up and the goddess Sora is revived, and Lamp also resumes training with her goddess candidate under Archive.
            Kirara was also spending peace in the village. One day, in front of Kirara and the lamp, a girl named Sumeragi Utsutsu, who is not listed in the scriptures that have lost her memory, appears.
            On the other hand, in Etoilia, the power of the scriptures weakens, and the monster Utsukai, which has never been seen before, begins to attack people.
            The girl Hypris, who leads Realists and Utsukai, was dying to destroy all the scriptures and the world. Kirara and her friends set out on a journey again to find their hometown",

        ],
     ];
    public static function all()
    {
        return collect(static::$blog_about);
    }

    public static function find($slug){
    $about = static::all();
    return $about->firstWhere('slug', $slug);
    }
    };
