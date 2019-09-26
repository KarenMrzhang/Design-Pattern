<?php
/**
 * Author: Karen
 * Date: 2019/9/26 0026
 */
interface AdvancedMediaPlayer {
    public function playVlc($fileName);
   public function playMp4($fileName);
}

class VlcPlayer implements AdvancedMediaPlayer
{
    public function playVlc($fileName)
    {
        echo "Playing vlc file. Name: " . $fileName . "\n";
    }

   public function playMp4($fileName)
   {
       //什么也不做
   }
}

class Mp4Player implements AdvancedMediaPlayer
{
    public function playVlc($fileName)
    {
        //什么也不做
    }

    public function playMp4($fileName)
    {
        echo "Playing mp4 file. Name: " . $fileName . "\n";
    }
}