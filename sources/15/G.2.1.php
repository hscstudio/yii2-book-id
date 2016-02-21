if ($this->beginCache($id,[
    'duration' => $duration,
    'dependency' => $dependency,
])) {    
    // ... generate content here ... 
    // Gridview atau Chart dsb    
    $this->endCache();
}
