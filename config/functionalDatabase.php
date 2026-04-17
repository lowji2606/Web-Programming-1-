<?php 
include "database.php" ;

// FIlm--------------
function getallFilm() { 
    global $pdo; 
    $stmt=$pdo->query('SELECT * FROM film');
    return $stmt->fetchAll();

}
function getFilmbyid($id){
    global $pdo;
    $stmt=$pdo->prepare("SELECT * FROM film WHERE Id=?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}
function createFilm ($NameFilm,$DateFilm,$image){
    global $pdo ;
    $stmt=$pdo->prepare('INSERT INTO film(NameFilm,DateFilm,image) VALUES(?,?,?)');
    $stmt->execute([$NameFilm,$DateFilm,$image]);

}
function editFilm($id,$NameFilm,$DateFilm,$image) {
    global $pdo ;
    $stmt=$pdo->prepare('UPDATE film SET  NameFilm=?,DateFilm=?,image=? WHERE Id=?');
    $stmt->execute([$NameFilm,$DateFilm,$image,$id]);
}

function deleteFilm ($id){
    global $pdo ;
    $stmt=$pdo->prepare('DELETE FROM film WHERE Id=?');
    $stmt->execute([$id]);
}
// ReviewFilm-----------
function getallReviewFilm() { 
    global $pdo; 
    $stmt=$pdo->query('SELECT * FROM reviewfilm');
    return $stmt->fetchAll();
}
function getReviewbyid($id){
    global $pdo;
    $stmt=$pdo->prepare("SELECT * FROM reviewfilm WHERE id=?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}
function createReviewFilm ($Content,$Date,$UserId,$FilmId){
    global $pdo ;
    $stmt=$pdo->prepare('INSERT INTO reviewfilm(Content,Date,UserId,FilmId) VALUES(?,?,?,?)');
    $stmt->execute([$Content,$Date,$UserId,$FilmId]);

}
function editReviewFilm ($id,$Content,$Date,$image) {
    global $pdo ;
    $stmt=$pdo->prepare('UPDATE reviewfilm SET  Content=?,Date=?,image=? WHERE id=?');
    $stmt->execute([$Content,$Date,$image,$id]);
}
function deleteReviewFilm ($id){
    global $pdo ;
    $stmt=$pdo->prepare('DELETE FROM reviewfilm WHERE id=?');
    $stmt->execute([$id]);
}
function getallReviewFilm1() { 
    global $pdo; 
    $stmt=$pdo->query('SELECT reviewfilm.*,users.UserName,film.NameFilm,film.image FROM reviewfilm JOIN users ON reviewfilm.UserId=users.Id  JOIN film ON reviewfilm.FilmId=film.Id');
    return $stmt->fetchAll();
}
function getReviewbyfilm($FilmId){
    global $pdo;
    
}
// User -------------
function getallUser() { 
    global $pdo; 
    $stmt=$pdo->query('SELECT * FROM users ');
    return $stmt->fetchAll();

}
function createUser ($UserName,$Pass){
    global $pdo ;
    $stmt=$pdo->prepare('INSERT INTO users(UserName,Pass) VALUES(?,?)');
    $stmt->execute([$UserName,$Pass]);

}
function editUser ($UserName,$id) {
    global $pdo ;
    $stmt=$pdo->prepare('UPDATE users SET UserName=? WHERE Id=?');
    $stmt->execute([$UserName,$id]);
}
function deleteUser ($id){
    global $pdo ;
    $stmt=$pdo->prepare('DELETE FROM users WHERE Id=?');
    $stmt->execute([$id]);
}
function getUserbyid($id){
    global $pdo;
    $stmt=$pdo->prepare("SELECT * FROM users WHERE Id=?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}
function gehtUserbyUserName($UserName){
    global $pdo;
    $stmt=$pdo->prepare("SELECT * FROM users WHERE UserName=?");
    $stmt->execute([$UserName]);
    return $stmt->fetch();
}

// Contact
function getallContact() { 
    global $pdo; 
    $stmt=$pdo->query('SELECT * FROM Contact ');
    return $stmt->fetchAll();

}

function createContact ($EmailFrom,$Content,$Date){
    global $pdo ;
    $stmt=$pdo->prepare('INSERT INTO Contact(EmailFrom,Content,Date) VALUES(?,?,?)');
    $stmt->execute([$EmailFrom,$Content,$Date]);

}
function editContact ($EmailFrom,$Content,$Date,$id) {
    global $pdo ;
    $stmt=$pdo->prepare('UPDATE users SET EmailFrom=?,Content=?,Date=?WHERE Id=?');
    $stmt->execute([$EmailFrom,$Content,$Date,$id]);
}
function deleteContact ($id){
    global $pdo ;
    $stmt=$pdo->prepare('DELETE FROM Contact WHERE Id=?');
    $stmt->execute([$id]);
}
function getContactbyid($id){
    global $pdo;
    $stmt=$pdo->prepare("SELECT * FROM Contact WHERE Id=?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}
//Search//

function searchFilm($NameFilm){
    global $pdo;
    $stmt=$pdo->prepare("SELECT * FROM film WHERE NameFilm LIKE ?");
    $stmt->execute([$NameFilm.'%']);
    return $stmt->fetchAll();
}
//wishlist//
function getallWishlist() { 
    global $pdo; 
    $stmt=$pdo->query('SELECT wishlist.id as WishlistId,wishlist.filmId , film.* FROM wishlist JOIN film ON wishlist.filmId=film.Id');
    return $stmt->fetchAll();
}
function createWishlist ($filmId){
    global $pdo ;
    $stmt=$pdo->prepare('INSERT INTO wishlist(filmId) VALUES(?)');
    $stmt->execute([$filmId]);

}
function deleteWishlist ($id){
    global $pdo ;
    $stmt=$pdo->prepare('DELETE FROM wishlist WHERE id=?');
    $stmt->execute([$id]);
}