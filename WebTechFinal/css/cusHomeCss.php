<style>
*{ padding:0; margin:0; box-sizing: border-box;  font-family: sans-serif; }
header { 
	width: 100%;
	height: 20vh;
}

nav {  
	width: 100%;
	height: 70px; 
	border-bottom: 1px black;
	box-shadow: 2px 0px 5px grey;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.logo a {  
	text-decoration: none;
	color: black;
	font-size: 50px;
	font-weight: bold;
}

.nav1 a {
	text-decoration: none;
	font-size: 25px;
	color: black;
	padding: 10px 20 px;
	margin: 5px;
}

.nav1 a:hover { 
	background-color: black; 
	color: White; 
}

.header { 
	background-color: White; 
	text-align: center; 
	padding: 20px; 
} 

.nav2 { 
	overflow:hidden; 
	background-color: Black; 
} 

.nav2 a { 
	float: Left; 
	display: flex; 
	color: white; 
	text-align: Right; 
	padding: 14px 16px; 
	text-decoration: none; 
} 

.nav2 a:hover { 
	background-color: lightblue; 
	color: black; 
}

.footer { 
	position: sticky;
	background-color: Black; 
	color: White;
	text-align: center; 
	padding: 10px; 
}

.column{ 
	display: flex;
	justify-content: center;
	align-items: center;
	transform-style: preserve-3d;
	transform origin: center;
	presprective: 2000px;
}

.left {
	flex-basis: 50%;
	sizing: 10px;
}

.right {
	flex-basis: 50%;
	max-width: 400px;
	margin-left: 100px;
}

.right h1 {
	font-size: 50px;
}

.right p {
	font-size: 20px; 
	margin: 20px 0px;
}
</style>
