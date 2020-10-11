<?php
require_once "./MediaPlayer.php";
require_once "./AdvancedMediaPlayer.php";
/**
 * Author: Karen
 * Date: 2019/9/26 0026
 */
class MediaAdapter implements MediaPlayer
{
    private $advancedMusicPlayer;

    public function __construct($audioType)
    {
        if (strcasecmp($audioType, 'vlc') == 0) {
            $this->advancedMusicPlayer = new VlcPlayer();
        } elseif (strcasecmp($audioType, 'mp4') == 0) {
            $this->advancedMusicPlayer = new Mp4Player();
        }
    }

    public function play($audioType, $fileName)
    {
        // TODO: Implement play() method.
        if (strcasecmp($audioType, 'vlc') == 0) {
            $this->advancedMusicPlayer->playVlc($fileName);
        } elseif (strcasecmp($audioType, 'mp4') == 0) {
            $this->advancedMusicPlayer->playMp4($fileName);
        }
    }
}
