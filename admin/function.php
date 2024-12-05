<?php 

	function article()
	{
		global $db;
		$query='select * from articles order by ArticleID DESC';
		$statement=$db->prepare($query);
		
		$statement->execute();
		
		return $statement;
	}
	function Them_bv_theloai()
	{
		global $db;
		$query='select * from categories order by CategoryID ASC';
		$statement=$db->prepare($query);
		
		$statement->execute();
		
		return $statement;
	}
	function TL($CategoryID) 
	{	
		global $db;
		$query='select * from categories where CategoryID=:CategoryID';
		$statement=$db->prepare($query);
		$statement->bindValue(':CategoryID', $CategoryID);
		$statement->execute();
		
		return $statement;
		
		
	}
	function SUA_TL($CategoryID,$CategoryName)
	{
			global $db;
        $query="UPDATE categories
		SET CategoryName = :CategoryName
		WHERE CategoryID = :CategoryID";
		$stmt = $db->prepare($query);
        $stmt->bindParam(':CategoryID', $CategoryID);
		$stmt->bindParam(':CategoryName',$CategoryName );      
        $stmt->execute();
        $stmt-> closeCursor();   
	}	
	
	function Them_bv($Title,$Content,$Img,$Day,$Time,$CategoryID,$UserID,$Status,$Popular,$Description){
        global $db;
        $query="INSERT INTO articles (Title, Content, Img,Day,Time,CategoryID,UserID,Status,Popular,Description) 
		values (:Title,:Content,:Img,:Day,:Time,:CategoryID,:UserID,:Status,:Popular,:Description)";
		$stmt = $db->prepare($query);
        $stmt->bindParam(':Title', $Title);
		$stmt->bindParam(':Content', $Content);
		$stmt->bindParam(':Img',$Img );
		$stmt->bindParam(':Day',$Day );
		$stmt->bindParam(':Time',$Time );
		$stmt->bindParam(':CategoryID',$CategoryID );
		$stmt->bindParam(':UserID',$UserID );  
		$stmt->bindParam(':Status',$Status );     
		$stmt->bindParam(':Popular',$Popular ); 
		$stmt->bindParam(':Description',$Description ); 
        $stmt->execute();
        $stmt-> closeCursor();         
    }
	function QL_BV()
	{
		global $db;
		$query='select * from articles a inner join categories c
		on a.CategoryID=c.CategoryID
		inner join users u on u.UserID=a.UserID where Status=1 ';
		$statement=$db->prepare($query);
		
		$statement->execute();
		$statement->setFetchMode(PDO::FETCH_ASSOC);
		return $statement;
	}
	function QL_BV_User($UserID)
	{
		global $db;
		$query='select * from articles a inner join categories c
		on a.CategoryID=c.CategoryID
		inner join users u on u.UserID=a.UserID where a.UserID=:UserID';
		$statement=$db->prepare($query);
		$statement->bindParam(':UserID',$UserID ); 
		$statement->execute();
		
		return $statement;
	}
	function QL_BV_Duyet()
	{
		global $db;
		$query='select * from articles a inner join categories c
		on a.CategoryID=c.CategoryID
		inner join users u on u.UserID=a.UserID where Status=0 ';
		$statement=$db->prepare($query);
		
		$statement->execute();
		$statement->setFetchMode(PDO::FETCH_ASSOC);
		return $statement;
	}
	function XuLi_Duyet($ArticleID)
	{
		global $db;
        $query="UPDATE articles
		SET Status='1'
		WHERE ArticleID = :ArticleID";
		$stmt = $db->prepare($query);
        
		$stmt->bindParam(':ArticleID',$ArticleID );      
        $stmt->execute();
        $stmt-> closeCursor();   
	}
	
	function Sua_Popular($ArticleID,$Popular)
	{	
		 		
		global $db;
        $query="UPDATE articles
		SET Popular=:Popular
		WHERE ArticleID = :ArticleID";
		$stmt = $db->prepare($query);
        $stmt->bindParam(':Popular',$Popular ); 
		$stmt->bindParam(':ArticleID',$ArticleID );      
        $stmt->execute();
        $stmt-> closeCursor();   
	}
	function BV_SUA_BV($ArticleID)
	{	
		global $db;
		$query='select * from articles where ArticleID=:ArticleID';
		$statement=$db->prepare($query);
		$statement->bindValue(':ArticleID', $ArticleID);
		$statement->execute();
		
		return $statement;
		
		
	}
	function GetCategory($CategoryID) //Sua_BV
		{	
			global $db;
			$query='select * from categories order by CategoryID ASC ' ;
			$statement=$db->prepare($query);
			$statement->execute();
			$s2="";
			foreach($statement as $r2)
			{
					if($r2["CategoryID"]==$CategoryID)
						$s2.="<option value='".$r2["CategoryID"]."' selected>";			
					else
						$s2.="<option value='".$r2["CategoryID"]."'>";
					$s2.=$r2["CategoryName"]."</option>";
				
			}
			echo  $s2;
		}
	function SUA_BV($tieude,$noidung,$theloai,$image_name,$ArticleID,$Description)
	{
			global $db;
        $query="UPDATE articles
		SET Title = :tieude,Content=:noidung,CategoryID=:theloai,Img=:image_name,Description=:Description
		WHERE ArticleID = :ArticleID";
		$stmt = $db->prepare($query);
        $stmt->bindParam(':tieude', $tieude);
		$stmt->bindParam(':noidung', $noidung);
		$stmt->bindParam(':image_name',$image_name );
		$stmt->bindParam(':theloai',$theloai );
		$stmt->bindParam(':ArticleID',$ArticleID );    
		$stmt->bindParam(':Description',$Description );   
        $stmt->execute();
        $stmt-> closeCursor();   
	}	
	function Xoa_BV($ArticleID)
	{
		global $db;
		$query='Delete from articles where ArticleID=:ArticleID';
		$statement=$db->prepare($query);
		$statement->bindValue(':ArticleID', $ArticleID);
		$statement->execute();
		
		return $statement;
	}
	function login($UserName,$Password)
	{
		global $db;
		$query='select * from users where UserName=:UserName and Password=:Password';
		
		$statement=$db->prepare($query);
		$statement->bindValue(':UserName', $UserName);
		$statement->bindValue(':Password', $Password);
		$statement->execute();
		
		return $statement;
	
	}
	function Xoa_TL($CategoryID)
	{
		global $db;
		$query='Delete from categories where CategoryID=:CategoryID';
		$statement=$db->prepare($query);
		$statement->bindValue(':CategoryID', $CategoryID);
		$statement->execute();
		
		return $statement;
	}
	function THEM_TL($CategoryName)
	{
		global $db;
        $query="INSERT INTO categories (CategoryName) 
		values (:CategoryName)";
		$stmt = $db->prepare($query);
        $stmt->bindParam(':CategoryName', $CategoryName);
		
        $stmt->execute();
        $stmt-> closeCursor();       
	}
	//tac gia
	function QL_TG()
	{
		global $db;
		$query='select * from users ';
		$statement=$db->prepare($query);
		
		$statement->execute();
		
		return $statement;
	}
	function select_pass2QTV() 
	{	
		global $db;
		$query='select * from users where UserID=1  ';
		$statement=$db->prepare($query);
		
		$statement->execute();
		
		return $statement;
		
		
	}
	function Them_TG($UserName,$Password,$Password2,$LastName,$Email,$Phone){
        global $db;
        $query="INSERT INTO users (UserName, Password, Password2,Name,Email,Phone,Jurisdiction) 
		values (:UserName,:Password,:Password2,:LastName,:Email,:Phone,2)";
		
		$stmt = $db->prepare($query);
        $stmt->bindParam(':UserName', $UserName);
		$stmt->bindParam(':Password', $Password);
		$stmt->bindParam(':Password2',$Password2 );
		$stmt->bindParam(':LastName',$LastName );
		$stmt->bindParam(':Email',$Email );
		$stmt->bindParam(':Phone',$Phone );
		 
        $stmt->execute();
        $stmt-> closeCursor();         
    }
	function Select_TG($UserID)
	{
		global $db;
		$query='select * from users where UserID=:UserID';
		$statement=$db->prepare($query);
		$statement->bindValue(':UserID', $UserID);
		$statement->execute();
		
		return $statement;
	}
	function Sua_TG($Password,$Password2,$LastName,$Email,$Phone,$UserID){
        global $db;
        $query="UPDATE users
		SET Password = :Password,Password2=:Password2,Name=:LastName,Email=:Email,Phone=:Phone
		WHERE UserID = :UserID";
		$stmt = $db->prepare($query);
        $stmt->bindParam(':UserID', $UserID);
		$stmt->bindParam(':Password', $Password);
		$stmt->bindParam(':Password2',$Password2 );
		$stmt->bindParam(':LastName',$LastName );
		$stmt->bindParam(':Email',$Email );
		$stmt->bindParam(':Phone',$Phone );
		 
        $stmt->execute();
        $stmt-> closeCursor();         
    }
	function Xoa_TG($UserID)
	{
		global $db;
		$query='Delete from users where UserID=:UserID';
		$statement=$db->prepare($query);
		$statement->bindValue(':UserID', $UserID);
		$statement->execute();
		
		return $statement;
	}
	//TaiKhoan
	function Select_TK($UserID)
	{
		global $db;
		$query='select * from users where UserID=:UserID';
		$statement=$db->prepare($query);
		$statement->bindValue(':UserID', $UserID);
		$statement->execute();
		
		return $statement;
	}
	function Sua_TT($Name,$Email,$Phone,$UserID){
        global $db;
        $query="UPDATE users
		SET Name=:Name,Email=:Email,Phone=:Phone
		WHERE UserID=:UserID";
		$stmt = $db->prepare($query);
        $stmt->bindParam(':UserID', $UserID);
		$stmt->bindParam(':Name',$Name );
		$stmt->bindParam(':Email',$Email );
		$stmt->bindParam(':Phone',$Phone );
		 
        $stmt->execute();
        $stmt-> closeCursor();         
    }
	function Select_MK2($UserID)
	{
		global $db;
		$query='select * from users where UserID=:UserID ';
		$statement=$db->prepare($query);
		$statement->bindValue(':UserID', $UserID);
		
		$statement->execute();
		
		return $statement;
	}
	function Doi_MK($UserID,$Password){
        global $db;
        $query="UPDATE users
		SET Password=:Password
		WHERE UserID=:UserID";
		$stmt = $db->prepare($query);
        $stmt->bindParam(':UserID', $UserID);
		$stmt->bindParam(':Password',$Password );
		
		 
        $stmt->execute();
        $stmt-> closeCursor();         
    }
	//LienHe
	function QL_LH()
	{
		global $db;
		$query='select * from contact order by Id DESC';
		$statement=$db->prepare($query);
		
		$statement->execute();
		
		return $statement;
	}
	function DD_LH($Id){
        global $db;
        $query="UPDATE contact
		SET Status=1
		WHERE Id=:Id";
		$stmt = $db->prepare($query);
        $stmt->bindParam(':Id', $Id);
		
        $stmt->execute();
        $stmt-> closeCursor();         
    }
	function Xoa_LH($Id)
	{
		global $db;
		$query='Delete from contact where Id=:Id';
		$statement=$db->prepare($query);
		$statement->bindValue(':Id', $Id);
		$statement->execute();
		
		return $statement;
	}
?>