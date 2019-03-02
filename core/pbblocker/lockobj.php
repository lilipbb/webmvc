<?php
namespace PbbLocker;
    class Lockobj{
        private $file;
        public function Lock(string $name=''){
            if($name=='')$name='lockobj';
            $file = fopen(PATH_CORE.'tmp/lockobj/' . $name, 'w');
            $count = 8;
            while (!flock($file, LOCK_EX | LOCK_NB)) {
                if (--$count == 0) {
                    fclose($file);
                    return false;
                }
                usleep(rand(100000, 300000));
            }
            $this->file=$file;
            return true;
        }
        public function UnLock(){
            if($this->file!=null){
                flock($this->file,LOCK_UN);
                fclose($this->file);
                $this->file=null;
            }
        }
    }