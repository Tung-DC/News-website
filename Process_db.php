<?php

	function category()
	{
		global $db;
		$query='select * from categories';
		$statement = $db->prepare($query);
		$statement->execute();
		return $statement;
	}
	function category2($CategoryID)
	{
		global $db;
		$query='select * from categories where CategoryID=:CategoryID';
		$statement = $db->prepare($query);
		$statement->bindValue(':CategoryID',$CategoryID);
		$statement->execute();
		return $statement;
	}
	function home()
	{
		global $db;
		$query='select * from articles  ORDER BY 	ArticleID  DESC limit 3';  //lay 3 bai viet moi nhat
		$statement = $db->prepare($query);
		$statement->execute();
		return $statement;
	}
	function article($CategoryID)
	{
		global $db;
		$query='select * from articles where CategoryID = :CategoryID AND Status=1 order by ArticleID DESC';
		$statement=$db->prepare($query);
		$statement->bindValue(':CategoryID',$CategoryID);
		$statement->execute();
		
		return $statement;
	}	
	function ChiTietBaiViet($ArticleID)
	{
		global $db;
		$query='select * from articles a inner join categories c
		on a.CategoryID=c.CategoryID
		inner join users u on u.UserID=a.UserID where a.ArticleID=:ArticleID AND a.Status=1';
		$statement=$db->prepare($query);
		$statement->bindValue(':ArticleID',$ArticleID);
		$statement->execute();
		
		return $statement;
	}
	function TinLienQuan($CategoryID,$ArticleID)
	{
		global $db;
		$query='select * from articles where CategoryID = :CategoryID AND Status=1  AND ArticleID!=:ArticleID limit 3';
		$statement=$db->prepare($query);
		$statement->bindValue(':CategoryID',$CategoryID);
		$statement->bindValue(':ArticleID',$ArticleID);
		$statement->execute();
		
		return $statement;
	}	
	//Trang Chủ
	function banner()
	{	//dang thieu
		global $db;
		$query='select * from articles where Status=1 order by ArticleID DESC limit 4';
		$statement = $db->prepare($query);
		$statement->execute();
		return $statement;
	}
	function baiviet_moinhat($CategoryID)
	{
		global $db;
		$query='select * from articles where CategoryID=:CategoryID And Status =1 order by ArticleID DESC limit 1';
		$statement = $db->prepare($query);
		$statement->bindValue(':CategoryID',$CategoryID);
		$statement->execute();
		return $statement;
	}
	function baiviet_4moinhat($CategoryID)
	{
		global $db;
		$query='select * from articles where CategoryID=:CategoryID And Status =1 ORDER by ArticleID DESC limit 1,4';
		$statement = $db->prepare($query);
		$statement->bindValue(':CategoryID',$CategoryID);
		$statement->execute();
		return $statement;
	}
	function Top10BaiVietMoi()
	{
		global $db;
		$query='select * from articles where Status =1 order by ArticleID DESC limit 10';
		$statement = $db->prepare($query);
		$statement->execute();
		return $statement;
	}
	function Top5BaiVietMoi()
	{
		global $db;
		$query='select * from articles where Status =1 order by ArticleID DESC limit 5';
		$statement = $db->prepare($query);
		$statement->execute();
		return $statement;
	}
	function Top4BaiVietNoiBat()
	{
		global $db;
		$query='select * from articles where Status =1 AND Popular=1 order by ArticleID DESC ';
		$statement = $db->prepare($query);
		$statement->execute();
		return $statement;
	}
	function Lien_He($Name,$Email,$Phone,$Title,$Content,$Today,$Time){
        global $db;
        $query="INSERT INTO contact (Name, Email, Phone,Title,Content,Day,Time,Status) 
		values (:Name,:Email,:Phone,:Title,:Content,:Today,:Time,0)";
		$stmt = $db->prepare($query);
        $stmt->bindParam(':Name', $Name);
		$stmt->bindParam(':Email', $Email);
		$stmt->bindParam(':Phone',$Phone );
		$stmt->bindParam(':Title',$Title );
		$stmt->bindParam(':Content',$Content );
		$stmt->bindParam(':Today',$Today );
		$stmt->bindParam(':Time',$Time );  
		  
        $stmt->execute();
        $stmt-> closeCursor();         
    }
	
?>