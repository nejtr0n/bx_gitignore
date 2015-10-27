<?php
namespace Nejtr0n\Bx_gitignore;
use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Installer {
  public static function copy(Event $event){
    $event->getIO()->write("Show me after INSTALL/UPDATE command");
    var_dump($event);
  }
}
