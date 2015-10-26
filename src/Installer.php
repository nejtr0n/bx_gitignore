<?php
namespace Nejtr0n/Bx_gitignore;
use ComposerScriptEvent;

class Installer {
  public static function copy(Event $event){
    $event->getIO()->write("Show me after INSTALL/UPDATE command");
  }
}
