<?php
namespace CanRover\Http;

class Flash {
    /**
     * Create a flash message
     * 
     * @param  string $title   
     * @param  string $message 
     * @param  string $type   
     * @param  string $key     
     * @return void         
     */
    public function create($title, $message, $type, $key = "flash_message") {
        session()->flash($key, [
            'title'     => $title,
            'message'   => $message,
            'type'      => $type
        ]);
    }

    /**
     * Create an informational message
     * 
     * @param  string $title   
     * @param  string $message 
     * @return void        
     */
    public function info($title, $message) {
        return $this->create($title, $message, 'info');
    }

    /**
     * Create a success message
     * 
     * @param  string $title  
     * @param  string $message 
     * @return void          
     */
    public function success($title, $message) {
        return $this->create($title, $message, 'success');
    }

    /**
     * Create an error message
     * 
     * @param  string $title   
     * @param  string $message
     * @return void          
     */
    public function error($title, $message) {
        return $this->create($title, $message, 'error');
    }

    /**
     * Create an overlay message
     * 
     * @param  string $title   
     * @param  string $message 
     * @param  string $type    
     * @return void          
     */
    public function overlay($title, $message, $type = 'success') {
        return $this->create($title, $message, $type, "flash_message_overlay");
    }
}