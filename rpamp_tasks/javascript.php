<?php  
$title="Exercise 2: Create universal header, footer, or sidebar" ;
include 'header.php' ;?>

<div style="padding: 20px;">

<h3> This is ex2</h3>

<P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, commodi doloribus sunt, ad est vitae delectus itaque iusto repellat maiores sint tempore architecto minima minus tenetur! Dolor voluptas iste architecto.</p>

<script>
        document.write("hello world") // cannot write java script code inside php tags
        window.alert("This is an alert box")
</script>

<noscript> If someone has not enable java script </noscript>


<script>
    // when click on button
    function hello(){
        document.write("This is after the page has loaded.")
    }
</script>
<button onclick ="document.write('hello')"> Click Me </button>
<button onclick ="hello()"> Click Me </button>


</div>
<?php $file_path = __FILE__; ?>
<?php include 'footer.php' ; ?>
