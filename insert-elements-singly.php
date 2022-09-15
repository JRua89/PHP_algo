<?php

class Node{
    public $data;
    public $next;
    public $visited;
    public function __construct($data){
        $this->data = $data;
        $this->next = null;
        $this->visited = false;
    }
}

class LinkedList
{
    public $headNode = null;
    public $count = 0;

    
    public function insert($data)
    {
        //create a new node object with the data we want to insert
        $newNode = new Node($data);
        
        //head node 'null' indicates there is no node in the list
        if ($this->headNode == null) {
            //make the newnode as the head node
            $this->headNode = $newNode;
        } else {
            //else traverse throught last position and insert the new node at the last position
            $current = $this->headNode;

            while ($current->next != null) {
                $current = $current->next;
            }
            //now 'current' next filed points to the new node we created
            $current->next = $newNode;
        }

        $this->display();
        //increment the count indicating one node is entered in the list.
        $this->count++;
    }
    
}