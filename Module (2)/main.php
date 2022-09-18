<!-- Demo -->
<?php
$name = 'Raheem';
$second_name = &$name;
echo $name;
$name = 'sayed';
echo "$name";
?>
<!-- How is PHP used in HTML? -->
<?php
    echo '<p>But this code is interpreted by PHP and turned into HTMLL</p>';
?>

<?php
    echo '<ul>
				<li>You can use any HTML tags, </li>
				<li>Like this list </li>
				</ul>';
?>
<!-- How is PHP used in HTML? -->
<p>This HTML will get delivered as is</p>
<?php echo '<p>But this code is interpreted by PHP and turned into HTML</p>'; ?>
<p>This HTML will get delivered as is</p>
<p>But this code is interpreted by PHP and turned into HTML</p>
<?php
// I will always remember this
echo 'Hello, World!'; // My first PHP statement

/* "I've never thought of PHP as more
than a simple tool to solve problems."
- Rasmus Lerdorf */
echo "\nRasmus is the creator of PHP!";

/*Exercises */
echo 'My first string'; // Prints: My first string
echo 'She said "hi" to the dog.'; // Prints: She said "hi" to the dog.
echo '1. Go to gym';
echo '2. Cook dinner';
echo '1. Go to gym';
echo "\n2. Cook dinner";
echo 'one'.'two';
  echo 'Code'.'cademy';
  echo "\nMy name is:".' Raheem';
  echo "\n".'tur'.'duck'.'en';
  $my_name = 'Aisle Nevertell';
    $first_name = 'Raheem';
    $biography = "\nAn Egyptian who is trying to live";
    $favorite_food = "\n".'tur'.'duck'.'en';
    $favorite_food = 'Red curry with eggplant, green beans, and peanuts';
    echo $favorite_food;
    $dog_name = 'Tadpole';
echo $dog_name;
$dog_name = 'Tadpole';
$favorite_food = 'salmon';
$color = 'brown';

echo 'I have a'.$color.' dog named'.$dog_name.' and her favorite food is '.$favorite_food.'.';
// Prints: I have a brown dog named Tadpole and her favorite food is salmon.

$dog_name = 'Tadpole';
$favorite_food = 'salmon';
$color = 'brown';

echo "I have a $color dog named $dog_name and her favorite food is $favorite_food.";
// Prints: I have a brown dog named Tadpole and her favorite food is salmon.

// Fill in the blanks in the code below:
  $noun = 'people';
  $adjective = 'Charming';
  $verb = 'Think';

  echo "The world's most beloved $noun was very $adjective 
and loved to $verb every single day.";

//Fix the code below and uncomment it:

 echo "\nI have always been obsessed with ${noun}s.
 I'm ${adjective}ish. I'm always ${verb}ing.";

$dog_name = 'Tadpole';
$favorite_food = 'salmon';
$color = 'brown';

echo "I have a $color dog named $dog_name and her favorite food is $favorite_food.";
// Prints: I have a brown dog named Tadpole and her favorite food is salmon.
$first_player_rank = 'Beginner';
$second_player_rank = $first_player_rank;

  $movie = '___';
// Add your code here:

  echo "I'm a fickle person, my favorite movie used to be $movie.";

// Add a statement here:
  $movie = 'FML';
  $old_favorite = $movie;

  echo "\nBut now my favorite is $movie.";
    echo "\nBut now my favorite is $  $old_favorite";

    $full_name = 'Aisle';
    $full_name .= 'Nevertell';
    echo $full_name; // Prints: Aisle Nevertell
  echo "I'm going on a picnic!";

  $sentence = "\nI'm going on a picnic, and I'm taking apples";
  $sentence .= ', bottle up';
  $sentence .= ', car';
  echo $sentence;

  $first_player_rank = 'Beginner';
$second_player_rank = $first_player_rank;
echo $second_player_rank; // Prints: Beginner

$first_player_rank = 'Intermediate'; // Reassign the value of $first_player_rank
echo $second_player_rank; // Still Prints: Beginner

$name = 'Raheem';
$second_name = &$name;
echo $name;
echo "\n$second_name";
$name = 'sayed';
echo "\n$name";
echo "\n$second_name";

// Raheem
// Raheem
// sayed
// sayed

/* Imagine a lot of code here */
  $very_bad_unclear_name = '15 chicken wings';
// Write your code here:
  $order = &$very_bad_unclear_name;
  $order .= 'Test';
  // Don't change the line below
  echo "\nYour order is: $very_bad_unclear_name.";