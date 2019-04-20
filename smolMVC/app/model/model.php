<?php
class Model
{
    public function home_data()
    {
        return array(
            'slide1' => '16x9.jpg',
            'slide2' => '16x9.jpg',
            'slide3' => '16x9.jpg',
            'slide4' => '16x9.jpg',
            'qoute' => "You want to wake up in the morning and think the future is going to be great - and that's what being a spacefaring civilization is all about. It's about believing in the future and thinking that the future will be better than the past. And I can't think of anything more exciting than going out there and being among the stars.",
            'author' => "ELON MUSK",
        );
    }

    public function about_data()
    {
        return array(
            'video' => 'https://www.youtube.com/embed/Ndpxuf-uJHE?controls=0',
            'qoute' => 'SpaceX designs, manufactures and launches advanced rockets and spacecraft. The company was founded in 2002 to revolutionize space technology, with the ultimate goal of enabling people to live on other planets.',
        );
    }

    public function rockets_data()
    {
        return array(
            'rocket1' => 'starhopper',
            'rocket2' => 'starship',
            'rocket3' => 'booster',
            'rocket4' => 'its',
        );
    }
}
