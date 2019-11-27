    @param string       $table  The name of the database table to work with
    @param int          $page   Page number
    @param array|string $fields Array or coma separated list of fields to fetch
    
    @return array
    @throws Exception

    public function paginate ($table, $page, $fields = null) {
        $offset = $this->pageLimit * ($page - 1);
        $res = $this->withTotalCount()->get ($table, Array ($offset, $this->pageLimit), $fields);
        $this->totalPages = ceil($this->totalCount / $this->pageLimit);
        return $res;
    }