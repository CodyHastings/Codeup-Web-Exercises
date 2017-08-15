<?php


class Park
{

    ///////////////////////////////////
    // Static Methods and Properties //
    ///////////////////////////////////

    /**
     * our connection to the database
     */
    public static $dbc = null;

    /**
     * establish a database connection if we do not have one
     */
    public static function dbConnect() {

        require 'db_connect.php';

        if (! is_null(self::$dbc)) {
            return;
        }
        self::$dbc = $connection;
    }

    /**
     * returns the number of records in the database
     */
    public static function count() {

        self::dbConnect();
       

        $statement = self::$dbc->query('select count(*) from national_parks;');

        $count = $statement->fetchAll(PDO::FETCH_ASSOC);

        $count = (int)$count[0]['count(*)'];

        return $count;

    }

    /**
     * returns all the records
     */
    public static function all() {
 
        self::dbConnect();
        $statement = self::$dbc->query('select * from national_parks;');

        $results->fetchAll(PDO::FETCH_OBJ);

        return $results;

    }

    /**
     * returns $resultsPerPage number of results for the given page number
     */
    public static function paginate($pageNo, $resultsPerPage = 4) {

        self::dbConnect();

        $stmt = self::$dbc->prepare("SELECT * FROM national_parks LIMIT :limits OFFSET :key");
        $stmt->bindValue(':limits', $resultsPerPage, PDO::PARAM_INT);
        $stmt->bindValue(':key',  $pageNo,  PDO::PARAM_INT);

        $stmt->execute();
        $parks_obj = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $parks_obj;

    }

    /////////////////////////////////////
    // Instance Methods and Properties //
    /////////////////////////////////////

    /**
     * properties that represent columns from the database
     */
    public $id;
    public $name;
    public $location;
    public $dateEstablished;
    public $areaInAcres;
    public $description;

    /**
     * inserts a record into the database
     */
    public function insert() {

        self::dbConnect();

        $stmt = Self::$dbc->prepare("insert into national_parks (`name`,`location`, `date_established`, `area_in_acres`, `description`)
            values (:name, :location, :date_established, :area_in_acres, :description);");

        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':location', $this->location, PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $this->date_established, PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $this->area_in_acres, PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);

        $stmt->execute();

    }
}
