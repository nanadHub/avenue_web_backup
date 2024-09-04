<?php 

// session_start();

// if (!isset($_SESSION['userID'])) {
//     header('Location: login.php');
//     exit();
// }

// function logout() {
//     $_SESSION = array();
//     session_destroy();
//     header('Location: login.php');
//     exit();
// }

// if (isset($_POST['logout'])) {
//     logout();
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/adminClone.css">
	<link rel="stylesheet" type="text/css" href="css/formEditing.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="image/webicon.png">
	<title>Dashboard</title>
</head>
<style type="text/css">
	 form {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        #overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Semi-dark background color */
        z-index: 999;
    }
         #dateTimeForm {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        padding: 20px;
        z-index: 1000;
    }

    #closeButton {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    label {
        display: block;
        margin-bottom: 8px;
        margin-top: 8px; /* Add margin to the top */
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }
    #logoutbtn{
    	background-color: transparent;
    	border: none;
    }
    #formlog{
    	border: none;
    	box-shadow: none;
    	padding: 0;
    	margin: 0;
    }
    #formlog input{
    	font-size: 15px;
    }
    .action-buttons{
    	display: flex;
    	justify-content: space-evenly;
    	align-items: center;
    }
    .action-buttons img {
            width: 25px;
            height: 25px;
            cursor: pointer;
        }
        .sub_menu {
            display: none;
            list-style-type: none;
            padding-left: 30px;
            opacity: 0;
    		transition: opacity 1s ease-in-out;
        }
		.sub_menu.show {
		    display: block;
		    opacity: 1;
		}
        .sub_menu a {
            text-decoration: none;
            color: black;
        }
        #manage{
        	display: flex;
        	grid-gap: 8px;
        }
    </style>
<body>

	<div class="nav">
		
		<ul>
			<div class="name">
				<p>ADMIN</p>
			</div>
			<div class="anchor">

				<a href="adminClone.php"><div class="flex">
					<div class="li_img">
						<img src="image/home.png">
					</div>
					<div class="li_name">
						<li>DASHBOARD</li>
					</div>
				</div></a>

            	<div class="dropdown">
                    <a href="#" class="management">
                        <div class="flex">
                            <div class="li_img">
                                <img src="image/candidate.png">
                            </div>
                            <div class="li_name" id="manage">
                            	<div>
                            		<li>MANAGEMENT</li>
                            	</div>
                                <div class="drop">
                                	<li>+</li>
                                </div>
                                
                            </div>
                        </div>
                    </a>
                    <ul class="sub_menu">
                    	<a href=""><li class="manage">Customers</li></a>
                        <a href=""><li class="productManage">Products</li></a>
                        <a href="#"><li>Staff</li></a>
                    </ul>
                </div>

				<a href="#"><div class="flex">
					<div class="li_img">
						<img src="image/voters.png">
					</div>
					<div class="li_name">
						<li>VOTERS</li>
					</div>
				</div></a>

				<a href="#"><div class="flex">
					<div class="li_img">
						<img src="image/rankings.png">
					</div>
					<div class="li_name">
						<li>FEEDBACK</li>
					</div>
				</div></a>

				<a href="#"><div class="flex">
					<div class="li_img">
						<img src="image/setting.png">
					</div>
					<div class="li_name setting">
						<li>SETTINGS</li>
					</div>
				</div></a>
					<!-- <ul class="">
						<a href=""><li>add candidates</li></a>
						<a href=""><li>add candidates</li></a>
					</ul> -->
				
			</div>
			
			
		</ul>
	</div>



	
	<section class="content section1" >
		<div class="dashboard_holder">
			<div class="dashboard_title">

			  	<div class="new_btn_holder">
			  		<div class="hamburger">
						<span></span>
					</div>

					<div class="new_nav">
		
						<ul>
							<div class="new_name">
								<p>MENU</p>
							</div>
							<div class="popnav">

								<a href="admin.php"><div class="flex">
									<div class="li_img">
										<img src="image/home.png">
									</div>
									<div class="li_name">
										<li>DASHBOARD</li>
									</div>
								</div></a>

								<a href="#"><div class="flex">
									<div class="li_img">
										<img src="image/candidate.png">
									</div>
									<div class="li_name">
										<li>CANDIDATE</li>
									</div>
								</div></a>

								<a href="add_stud_firebase.php"><div class="flex">
									<div class="li_img">
										<img src="image/voters.png">
									</div>
									<div class="li_name">
										<li>VOTERS</li>
									</div>
								</div></a>

								<a href="#"><div class="flex">
									<div class="li_img">
										<img src="image/rankings.png">
									</div>
									<div class="li_name">
										<li>RESULTS</li>
									</div>
								</div></a>
				
							</div>
			
			
						</ul>
					</div>
					
			  	</div>

				<div>
					<h2>DASHBOARD</h2>
				</div>

				<div class="divide">
					<div class="admin_img">
						<div>
							<?php
								if (isset($_SESSION['username'])) {
    							echo "Welcome, " . $_SESSION['fname'] ." ". $_SESSION['lname'] . "!";
								}
							?>
						</div>
						<div>
							<img src="image/avenueLogo.png">
						</div>
					</div>
					<div class="logout_part">
						<div>
							<?php 
								echo "<form id='formlog' action='' method='post'>";
								echo "<input type='submit' id='logoutbtn' value='Logout' name='logout'>";
								echo "</form>";
							?>
						</div>
						<div>
							<img src="image/logout.png">
						</div>	
					</div>
				</div>
			</div>
		
			<div id="overlay">

			<form id="dateTimeForm">
    
    			<div>
        			<h2>Add Category</h2>
    			</div>
    			<div>
        			<input type="text" id="category"  placeholder="Category Name" required>
    			</div>
    			<div class="button_holder">
        			<div>
        				<button id="cancel" onclick="hideForm()">Cancel</button>
        			</div>
        			<div>
    					<button type="button" id="confirm" onclick="sendData()">Confirm</button>
    				</div>
    			</div> 
			</form>


			<form id="products">
    			<div>
        			<h2>Add Products</h2>
    			</div>
    			<div class="productsHolder">
    				<div class="txtborder Name">
    					<p>Product Name*</p>
        				<input type="text" id="productName" required autofocus>
    				</div>

    				<div class="txtborder Category">
    					<p>Product Category*</p>
        				<select id="categorySelect" required>
        				</select>
    				</div>

    				<div class="txtborder">
            			<p>Product Flavor #1*</p>
            			<input type="text" id="productFlavor1"  autofocus>
            			<p id="anotherFlavor1" onclick="showAnotherFlavor1()">*Add Another flavor #2*</p>
            			<div id="another_flavor1" style="display: none;">
            			    <p>Flavor #2*</p>
            			    <input type="text" id="productFlavor2"  autofocus>
            			    <p id="anotherFlavor2" onclick="showAnotherFlavor2()">*Add Another flavor #3*</p>
            			    <div id="another_flavor2" style="display: none;">
            			        <p>Flavor #3*</p>
            			        <input type="text" id="productFlavor3"  autofocus>
            			        <p id="anotherFlavor3" onclick="showAnotherFlavor3()">*Add Another flavor #4*</p>
            			        <div id="another_flavor3" style="display: none;">
            			            <p>Flavor #4*</p>
            			            <input type="text" id="productFlavor4"  autofocus>
            			            <p id="anotherFlavor4" onclick="showAnotherFlavor4()">*Add Another flavor #5*</p>
            			            <div id="another_flavor4" style="display: none;">
            			                <p>Flavor #5*</p>
            			                <input type="text" id="productFlavor5"  autofocus>
            			            </div>
            			        </div>
            			    </div>
            			</div>
        			</div>

    				<div class="txtborder Price">
        				<div class="file_holder">
        					<p>Upload Image*</p>
        					<input type="file" name="" id="img">
        				</div>
        			</div>

    				<div class="txtborder">
    					<p>Product Price*</p>
    					<div id="holderSize">
        					<div>
        						<select id="size1" onchange="updateOptions()">
        							<option disabled selected>Set Size</option>
        							<option value="Regular">Regular</option>
        							<option value="Large">Large</option>
        							<option value="Small">Small</option>
        						</select>
        					</div>
        					<div>
        						<input type="number" id="productQuantity1" name="" placeholder="Enter Price" required>
        					</div>
        				</div>

        			<p id="another" onclick="showAnother()">*Add Another Size & Price*</p>
        			<div id="another_popup">
        				<div id="holderSize">
        					<div>
        						<select id="size2">
        							<option disabled selected>Set Size</option>
        							<option value="Regular">Regular</option>
        							<option value="Large">Large</option>
        							<option value="Small">Small</option>
        						</select>
        					</div>
        					<div>
        						<input type="number" id="productQuantity2" name="" placeholder="Enter Price" required>
        					</div>
        				</div>
        			</div>

    				</div>
    				
        			
    			</div>
    			<div class="button_holder">
        			<div>
        				<button id="cancel" class="cancelBtn" onclick="hideProd()">Cancel</button>
        			</div>
        			<div>
    					<button type="button" id="confirm" onclick="sendProd()">Confirm</button>
    				</div>
    			</div>  
			</form>
			</div>




			<!-- <div id="editProductsOverlay">
				<form id="editProducts">
    				<div>
        				<h2>Edit Products</h2>
    				</div>
    				<div class="productsHolder">
        				<div class="txtborder Name">
            				<p>Product Name*</p>
            				<input type="text" id="editProductName" required autofocus>
        				</div>

        				<div class="txtborder Category">
        				    <p>Product Category*</p>
        				    <select id="editCategorySelect" required>
        				    </select>
        				</div>

        				<div class="txtborder">
        				    <p>Product Flavor #1*</p>
        				    <input type="text" id="editProductFlavor1" autofocus>
        				    <p id="editAnotherFlavor1" onclick="showEditAnotherFlavor1()">*Add Another flavor #2*</p>
        				    <div id="editAnother_flavor1" style="display: none;">
        				        <p>Flavor #2*</p>
        				        <input type="text" id="editProductFlavor2" autofocus>
        				        <p id="editAnotherFlavor2" onclick="showEditAnotherFlavor2()">*Add Another flavor #3*</p>
        				        <div id="editAnother_flavor2" style="display: none;">
        				            <p>Flavor #3*</p>
        				            <input type="text" id="editProductFlavor3" autofocus>
        				            <p id="editAnotherFlavor3" onclick="showEditAnotherFlavor3()">*Add Another flavor #4*</p>
        				            <div id="editAnother_flavor3" style="display: none;">
        				                <p>Flavor #4*</p>
        				                <input type="text" id="editProductFlavor4" autofocus>
        				                <p id="editAnotherFlavor4" onclick="showEditAnotherFlavor4()">*Add Another flavor #5*</p>
        				                <div id="editAnother_flavor4" style="display: none;">
        				                    <p>Flavor #5*</p>
        				                    <input type="text" id="editProductFlavor5" autofocus>
        				                </div>
        				            </div>
        				        </div>
        				    </div>
        				</div>

        				<div class="txtborder Price">
        				    <div class="file_holder">
        				        <p>Upload Image*</p>
        				        <input type="file" name="" id="editImg">
        				    </div>
        				</div>

        				<div class="txtborder">
        				    <p>Product Price*</p>
        				    <div id="editHolderSize">
        				        <div>
        				            <select id="editSize1" onchange="updateEditOptions()">
        				                <option disabled selected>Set Size</option>
        				                <option value="Regular">Regular</option>
        				                <option value="Large">Large</option>
        				                <option value="Small">Small</option>
        				            </select>
        				        </div>
        				        <div>
        				            <input type="number" id="editProductQuantity1" name="" placeholder="Enter Price" required>
        				        </div>
        				    </div>

            				<p id="editAnother" onclick="showEditAnother()">*Add Another Size & Price*</p>
            				<div id="editAnother_popup">
            				    <div id="editHolderSize">
            				        <div>
            				            <select id="editSize2">
            				                <option disabled selected>Set Size</option>
            				                <option value="Regular">Regular</option>
            				                <option value="Large">Large</option>
            				                <option value="Small">Small</option>
            				            </select>
            				        </div>
            				        <div>
            				            <input type="number" id="editProductQuantity2" name="" placeholder="Enter Price" required>
            				        </div>
            				    </div>
            				</div>

        				</div>
    				</div>
    				<div class="button_holder">
        				<div>
            				<button id="editCancel" class="cancelBtn" onclick="hideEditProd()">Cancel</button>
        				</div>
        				<div>
            				<button type="button" id="editConfirm" onclick="sendEditProd()">Confirm</button>
        				</div>
    				</div>
				</form>

			</div> -->

    			<!-- <div id="show_winner">
    					<a href="message.php"><button id="show_prod">Chats</button></a>
    			</div> -->

			<div class="new_holder">
				<div class="inner_flex">

					<div class="leftside">
						<div class="chartBar">
							<p>Monthly Sales</p>
							<canvas id="barChart" width="100%" height="100%"></canvas>
						</div>
						<div class="customer_list">
							<div class="cust_holder">
								<p>Customer List</p>
								<p class="manage">view</p>
							</div>
							<div class="user_display">
								
							</div>
						</div>
					</div>
					<div class="rightside">
						<div class="innerrightside">

							<div class="donutholder">
								<div class="chartDougnut">
									<p>Top Selling Product</p>
									<canvas id="dougnutChart"></canvas>
								</div>
							</div>
							

							<div class="newcard">
								
								<div class="card">
									<div class="reg_voters">
										<p>Registered Staff</p>
									</div>
									<div class="card_icon">
										<div class="numbers" id="registeredVotersCount">
											<p class="staffNum">00</p>
										</div>
										<div>
											<img src="image/voting.png">	
										</div>
									</div>
		    					</div>

		    					<div class="card">
									<div class="reg_voters">
										<p>Registered Customer</p>
									</div>
									<div class="card_icon">
										<div class="numbers" id="candidatesCount">
											<p class="custNum">00</p>
										</div>
										<div>
											<img src="image/candidate1.png">	
										</div>
									</div>
		    					</div>

		    					<div class="card">
									<div class="reg_voters">
										<p>Numbers of Products</p>
									</div>
									<div class="card_icon">
										<div class="numbers">
											<p class="prodNum">00</p>
										</div>
										<div>
											<img src="image/job-offer.png">	
										</div>
									</div>
		    					</div>

		    					<div class="card">
									<div class="reg_voters">
										<p>Daily Profit</p>
									</div>
									<div class="card_icon">
										<div class="numbers">
											<p class="prodNum">00</p>
										</div>
										<div>
											<img src="image/job-offer.png">	
										</div>
									</div>
		    					</div>

							</div>

						</div>
						<div class="tableHolder">
							<div class="table1">
								<div class="order">
                					<p>Pending Orders</p>
            					</div>
                				<table id="ordersTable">
                    				<thead>
                        				<tr>
                            				<th>Customer</th>
                            				<th>Product</th>
                            				<th>Price</th>
                            				<th>Quantity</th>
                            				<th>Size</th>
                            				<th>Payment</th>
                            				<th>Status</th>
                            				<th>Action</th>
                        				</tr>
                    				</thead>
                    				<tbody id="ordersTableBody">
                        
                    				</tbody>
                				</table>
							</div>

							<div class="table2">
								<div class="order">
                					<p>Completed Orders</p>
            					</div>
                				<table id="ordersTable">
                    				<thead>
                        				<tr>
                            				<th>Customer</th>
                            				<th>Product</th>
                            				<th>Price</th>
                            				<th>Quantity</th>
                            				<th>Size</th>
                            				<th>Payment</th>
                            				<th>Status</th>
                            				<th>Action</th>
                        				</tr>
                    				</thead>
                    				<tbody id="ordersTableBody">
                        
                    				</tbody>
                				</table>
							</div>
							
						</div>
						

					</div>

				</div>	
			</div>

		</div>
	</section>
	
	<div class="custpopupoverlay">

		<div class="holding">
			<div class="customer_details">
				<div class="close">&times;</div>
			</div>
			<div class="custpopup">
				<div class="xbtn">&times;</div>
				<h2>Manage Customer Account</h2>

				<div class="user_manage"></div>
			</div>
		</div>

	</div>

	<div class="ProductPopupOverlay">

		<div class="holding2">
			
			<div class="sideBar">
    			<ul>
        			<li class="category-filter selected"  data-category="Milktea">Milktea</li>
        			<li class="category-filter" data-category="Fruit Tea">Fruit Tea</li>
        			<li class="category-filter" data-category="Frappe">Frappe</li>
        			<li class="category-filter" data-category="Milkshake">Milkshake</li>
        			<li class="category-filter" data-category="Coolers">Coolers</li>
        			<li class="category-filter" data-category="Add-Ons">Add-ons</li>
        			<li class="category-filter" data-category="Egg Drop Sandwich">Egg Drop</li>
        			<li class="category-filter" data-category="Pasta">Pasta</li>
        			<li class="category-filter" data-category="Pizza">Pizza</li>
        			<li class="category-filter" data-category="Mozzarella">Mozzarella</li>
        			<li class="category-filter" data-category="Fries">Fries</li>
        			<li class="category-filter" data-category="Cheese Sticks">Cheese Sticks</li>
        			<li class="category-filter" data-category="Nachos">Nachos</li>
        			<li class="category-filter" data-category="Chicken Poppers">Chicken Poppers</li>
    			</ul>
			</div>
			<div class="search_holder">
				<div class="prod-title">
					<h2>Manage Products</h2>
				</div>
				
				<div class="search-bar">
    				<input type="text" id="productSearch" placeholder="Search for products...">
    				<div class="btn-hold">
    					<details>
    						<summary><img src="image/add.png"></summary>
    						<ul>
    							<li onclick="showForm()">Add Category</li>
    							<li onclick="showProd()">Add Products</li>
    						</ul>
    					</details>
    					<!-- <button id="show_form" onclick="showForm()">Add Category</button>
						<button id="show_prod" onclick="showProd()">Add Products</button> -->
    				</div>
				</div>
				<div class="custpopup2">
				
				<div class="xbtn2">&times;</div>
				
				<div class="product_manage"></div>

			</div>
			</div>
			
			<div class="customer_details2">
				
			</div>

		</div>

	</div>
	


</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
<script src="dougnut.js"></script>
<script src="bar.js"></script>

<script src="js/jquery.js"></script>
<script src="js/script.js"></script>


<script type="text/javascript">
	document.getElementById("dateTimeForm").addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent the default form submission behavior
        sendData();
    });
	 function showForm() {
        var form = document.getElementById('dateTimeForm');
        var overlay = document.getElementById('overlay');
        var prodDiv = document.getElementById('products');

        form.style.display = 'block';
        overlay.style.display = 'block';
        prodDiv.style.display = 'none';
    }

    function hideForm() {
        var form = document.getElementById('dateTimeForm');
        var overlay = document.getElementById('overlay');
        form.style.display = 'none';
        overlay.style.display = 'none';
    }

    function sendData() {
        var form = document.getElementById('dateTimeForm');
        form.style.display = 'none';
        hideForm();
    }
    function showAnother() {
    var form = document.getElementById('another_popup');
    var btn = document.getElementById('another');



    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
        btn.innerText = "*Remove Added Field*";
    } else {
        form.style.display = 'none';
        btn.innerText = "*Add Another Size & Price*"; 
    }
}

function showAnotherFlavor1() {
    var form = document.getElementById('another_flavor1');
    var btn = document.getElementById('anotherFlavor1');

    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
        btn.innerText = "*Remove Added Field*";
    } else {
        form.style.display = 'none';
        btn.innerText = "*Add Another Flavor*"; 
    }
}

function showAnotherFlavor2() {
    var form = document.getElementById('another_flavor2');
    var btn = document.getElementById('anotherFlavor2');

    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
        btn.innerText = "*Remove Added Field*";
    } else {
        form.style.display = 'none';
        btn.innerText = "*Add Another Flavor #2*"; 
    }
}

function showAnotherFlavor3() {
    var form = document.getElementById('another_flavor3');
    var btn = document.getElementById('anotherFlavor3');

    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
        btn.innerText = "*Remove Added Field*";
    } else {
        form.style.display = 'none';
        btn.innerText = "*Add Another Flavor #3*"; 
    }
}
function showAnotherFlavor4() {
    var form = document.getElementById('another_flavor4');
    var btn = document.getElementById('anotherFlavor4');

    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
        btn.innerText = "*Remove Added Field*";
    } else {
        form.style.display = 'none';
        btn.innerText = "*Add Another Flavor #4*"; 
    }
}

function showAnotherFlavor5() {
    var form = document.getElementById('another_flavor5');
    var btn = document.getElementById('anotherFlavor5');

    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
        btn.innerText = "*Remove Added Field*";
    } else {
        form.style.display = 'none';
        btn.innerText = "*Add Another Flavor #5*"; 
    }
}



function updateOptions() {
    var selectedSize = document.getElementById('size1').value;
    var size2Options = document.getElementById('size2').options;

    for (var i = 0; i < size2Options.length; i++) {
        if (size2Options[i].value === selectedSize) {
            size2Options[i].disabled = true;
        } else {
            size2Options[i].disabled = false;
        }
    }
    var size1SelectedIndex = document.getElementById('size1').selectedIndex;
    if (size1SelectedIndex !== 0) {
        document.getElementById('size2').getElementsByTagName('option')[0].disabled = true;
    } else {
        document.getElementById('size2').getElementsByTagName('option')[0].disabled = false;
    }
}



    // added products

    document.getElementById("products").addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent the default form submission behavior
        sendData();
    });
	 function showProd() {
        var form = document.getElementById('products');
        var overlay = document.getElementById('overlay');
        form.style.display = 'block';
        overlay.style.display = 'block';
    }

    function hideProd() {
        var form = document.getElementById('products');
        var overlay = document.getElementById('overlay');
        form.style.display = 'none';
        overlay.style.display = 'none';
    }

    function sendData() {
        var form = document.getElementById('products');
        form.style.display = 'none';
        hideForm();
    }
</script>

<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-storage.js"></script>

<script>

        // Initialize Firebase
  const firebaseConfig = {
  apiKey: "AIzaSyCMTIQkR66Zz-ENPofBTkuxg-J1oRpaCf4",
  authDomain: "avenue-t-house.firebaseapp.com",
  databaseURL: "https://avenue-t-house-default-rtdb.firebaseio.com",
  projectId: "avenue-t-house",
  storageBucket: "avenue-t-house.appspot.com",
  messagingSenderId: "928838424164",
  appId: "1:928838424164:web:2c289e01a7744d8df57171",
  measurementId: "G-GMMWS6J7ED"
};

        firebase.initializeApp(firebaseConfig);
        
        const database = firebase.database();
        const storage = firebase.storage();
        const categorySelect = document.getElementById('categorySelect');

    // Function to populate select dropdown with categories from Firebase
    function populateCategories() {
        const categoriesRef = database.ref('category');
        categoriesRef.on('value', (snapshot) => {
            categorySelect.innerHTML = '<option disabled selected>Select Category</option>';
            snapshot.forEach((childSnapshot) => {
                const category = childSnapshot.val();
                const option = document.createElement('option');
                option.value = category;
                option.textContent = category;
                categorySelect.appendChild(option);
            });
        });
    }

    function fetchOrders() {
            const ordersRef = firebase.database().ref('Orders');
            ordersRef.on('value', (snapshot) => {
                const orders = snapshot.val();
                displayOrders(orders);
            });
        }

        // Function to display orders
        function displayOrders(orders) {
            const ordersTableBody = document.getElementById('ordersTableBody');
            ordersTableBody.innerHTML = ''; 

            for (const customer in orders) {
                for (const orderId in orders[customer]) {
                    const order = orders[customer][orderId];
                    const orderItem = order.items[0]; // Assuming one item per order for simplicity

                    if (orderItem.orderStatus === 'pending') {
                        const row = document.createElement('tr');
                        
                        
                        const customerCell = document.createElement('td');
                        customerCell.textContent = order.fullName;
                        row.appendChild(customerCell);

                        const productCell = document.createElement('td');
                        productCell.textContent = orderItem.productName;
                        row.appendChild(productCell);

                        const priceCell = document.createElement('td');
                        priceCell.textContent = orderItem.productPrice;
                        row.appendChild(priceCell);

                        const quantityCell = document.createElement('td');
                        quantityCell.textContent = orderItem.quantity;
                        row.appendChild(quantityCell);

                        const sizeCell = document.createElement('td');
                        sizeCell.textContent = orderItem.size;
                        row.appendChild(sizeCell);

                        const paymentCell = document.createElement('td');
                        paymentCell.textContent = orderItem.size;
                        row.appendChild(paymentCell);

                        const statCell = document.createElement('td');
                        statCell.textContent = orderItem.size;
                        row.appendChild(statCell);

                        const actionCell = document.createElement('td');
                        const actionButtonsDiv = document.createElement('div');
                        actionButtonsDiv.classList.add('action-buttons');

                        const approveImage = document.createElement('img');
                        approveImage.src = 'image/accept.png'; // Path to your approve image
                        approveImage.alt = 'Approve';
                        approveImage.onclick = function() {
                            // Handle approve action here
                            console.log('Approved', orderId);
                        };
                        actionButtonsDiv.appendChild(approveImage);

                        const rejectImage = document.createElement('img');
                        rejectImage.src = 'image/delete.png'; // Path to your image
                        rejectImage.alt = 'Reject';
                        rejectImage.onclick = function() {
                            // Handle reject action here
                            console.log('Rejected', orderId);
                        };
                        actionButtonsDiv.appendChild(rejectImage);

                        actionCell.appendChild(actionButtonsDiv);
                        row.appendChild(actionCell);

                        ordersTableBody.appendChild(row);
                    }
                }
            }
        }

        // Fetch orders on page load
        fetchOrders();

    function sendData() {
            const categoryInput = document.getElementById('category').value;
            const categoriesRef = database.ref('category');

            if (categoryInput === '') {
                alert("Please enter a category.");
                return;
            }
            
            // Check if the category already exists
            categoriesRef.orderByValue().equalTo(categoryInput).once('value', (snapshot) => {
                if (snapshot.exists()) {
                    // Category already exists
                    document.getElementById('category').value = '';
                    alert("Category already exists!");
                } else {
                    // Category does not exist, proceed to add it
                    categoriesRef.once('value', (snapshot) => {
                        const categoryCount = snapshot.numChildren();
                        const newCategoryKey = 'Category' + (categoryCount + 1);

                        // Save the new category with the generated key
                        categoriesRef.child(newCategoryKey).set(categoryInput)
                            .then(() => {
                                // Data has been successfully sent to Firebase
                                console.log("Data sent successfully");
                                document.getElementById('category').value = '';
                                alert("Data sent successfully!");
                                // hideForm();
                            })
                            .catch((error) => {
                                console.error("Error sending data: ", error);
                                alert("Error sending data: " + error.message);
                            });
                    });
                }
            });
        }

    populateCategories();

    function fetchAndDisplayUsers() {
            const usersRef = database.ref('Users');
            usersRef.once('value', (snapshot) => {
                const users = snapshot.val();
                const customerListDiv = document.querySelector('.user_display');

                for (const userId in users) {
                    if (users.hasOwnProperty(userId)) {
                        const user = users[userId];
                        
                        // Create a div for each user
                        const userDiv = document.createElement('div');
                        userDiv.classList.add('user_indi');

                        // Add user information
                        userDiv.innerHTML = `
                            <p>${user.fullName}</p>
                        `;

                        // Append the user div to the customer list div
                        customerListDiv.appendChild(userDiv);
                    }
                }
            });
        }


        function manageCustomerDisplay() {
            const usersRef = database.ref('Users');
            usersRef.once('value', (snapshot) => {
                const users = snapshot.val();
                const customerListDiv = document.querySelector('.user_manage');
                const customerDetailsDiv = document.querySelector('.customer_details');

                for (const userId in users) {
                    if (users.hasOwnProperty(userId)) {
                        const user = users[userId];
                        
                        // Create a div for each user
                        const userDiv = document.createElement('div');
                        userDiv.classList.add('cust_manage');

                        // Add user information
                        userDiv.innerHTML = `
                        		<div>
									<div class="indiImg"><img src="image/admin.png" alt=""></div>
                            		<div class="dislaying">${user.fullName} </div>
                        		</div>
							
                            	<div class="detail_holder">
                            		<div class="show">Show More</div>
                            		<details class="detCust">

                            		<summary><img src="image/more.png" alt=""></summary>

	                            		<ul class="managingBtn">
	                            			<li class="detBtn">Details</li>
	                            			<li>Restrict</li>
	                            			<li>Block</li>
	                            		</ul>
                            
                            		</details>
                            	</div>
                        	
                        `;

                        // Append the user div to the customer list div
                        customerListDiv.appendChild(userDiv);


                        const detailsButton = userDiv.querySelector('.detBtn');
                		detailsButton.addEventListener('click', () => {
                    	// Show the customer details div

                    	customerDetailsDiv.style.display = 'block';

                    	// Update the customer details div with user information
                    	customerDetailsDiv.innerHTML = `
                        	<h4>${user.fullName}</h4>
                        	<p>Phone: ${user.phoneNumber}</p>
                        	<p>Address : ${user.sitioStreet} ${user.street} ${user.town}</p>
                        	<!-- Add other user details here -->
                    	`;
                		});

                    }
                }
            });
        }

        function manageProductDisplay() {
    const productsRef = database.ref('Products');
    productsRef.once('value', (snapshot) => {
        const products = snapshot.val();
        const productListDiv = document.querySelector('.product_manage');
        const productDetailsDiv = document.querySelector('.customer_details2');

        // Function to display products based on the selected category
        function displayProducts(category) {
            productListDiv.innerHTML = ''; // Clear the product list div

            for (const productId in products) {
                if (products.hasOwnProperty(productId)) {
                    const product = products[productId];

                    // Filter products by category
                    if (product.Category === category || category === 'All') {
                        // Create a div for each product
                        const productDiv = document.createElement('div');

                        productDiv.classList.add('prod_manage');
						productDiv.setAttribute('data-id', productId);
						 // productDiv.setAttribute('data-id', 'Product1')
                        productDiv.innerHTML = `
                       	  
							<div>
                                <div class="prodImg"><img src="${product.ImageURL}" alt="${product.ProductName}"></div>
                                <div class="displaying">${product.ProductName}</div>
                            </div>
                            <div class="detail_holder">
                                <div class="show">Show More</div>
                                <div class="details-wrapper">
                                    <details>
                                        <summary><img src="image/more.png" alt="More"></summary>
                                        <ul class="managingBtn">
                                            <li class="detBtn">Details</li>
                                            <li class="editBtn" onclick="handleEdit(event)">Edit</li>
                                            <li>Disable</li>
                                        </ul>
                                    </details>
                                </div>
                            </div>

                            
                        `;

                        // Append the product div to the product list div
                        productListDiv.appendChild(productDiv);

                        const detailsButton = productDiv.querySelector('.detBtn');
                        const detailsElement = productDiv.querySelector('details');

                        detailsButton.addEventListener('click', () => {
                            // Show the product details div
                            productDetailsDiv.style.display = 'block';

                            // Update the product details div with product information
                            productDetailsDiv.innerHTML = `
                                <h4>${product.ProductName}</h4>
                                <p>Category: ${product.Category}</p>
                                <p>Large: ${product.Large}</p>
                                <p>Small: ${product.Small}</p>
                                <img class="detImg" src="${product.ImageURL}" alt="${product.ProductName}">
                                <button class="closeBtn">Close</button>
                            `;

                            detailsElement.removeAttribute('open');

                            const closeButton = productDetailsDiv.querySelector('.closeBtn');
                            closeButton.addEventListener('click', () => {
                                productDetailsDiv.style.display = 'none';
                            });
                        });
                    }
                }
            }
        }

        // Add event listeners to sidebar items
        const categoryFilters = document.querySelectorAll('.category-filter');
        categoryFilters.forEach(filter => {
            filter.addEventListener('click', () => {
                const category = filter.getAttribute('data-category');
                displayProducts(category);
            });
        });

        // Automatically select "Milktea" category
        const milkteaFilter = document.querySelector('.category-filter[data-category="Milktea"]');
        if (milkteaFilter) {
            milkteaFilter.click();
        }
        const searchBar = document.getElementById('productSearch');
        searchBar.addEventListener('input', () => {
            const searchQuery = searchBar.value.toLowerCase();
            
            // Check if the search query matches any product names
            let foundProduct = false;
            for (const productId in products) {
                if (products.hasOwnProperty(productId)) {
                    const product = products[productId];
                    if (product.ProductName.toLowerCase().includes(searchQuery)) {
                        foundProduct = true;
                        const matchingCategory = product.Category;

                        // Select the category
                        const categoryFilter = document.querySelector(`.category-filter[data-category="${matchingCategory}"]`);
                        if (categoryFilter) {
                            categoryFilter.click();
                        }

                        // Highlight matching product
                        const productDivs = document.querySelectorAll('.prod_manage');
                        productDivs.forEach(div => {
                            const productName = div.querySelector('.displaying').textContent.toLowerCase();
                            if (productName.includes(searchQuery)) {
                                div.classList.add('highlight');
                                div.scrollIntoView({ behavior: 'smooth', block: 'center' });
                            } else {
                                div.classList.remove('highlight');
                            }
                        });
                        break;
                    }
                }
            }

            if (!foundProduct) {
                displayProducts('All', searchQuery);
            }
            if (searchQuery === '') {
                if (milkteaFilter) {
                    milkteaFilter.click();
                }
            }
        });
    });
}

        

        window.onload = function() {
    		fetchAndDisplayUsers();
    		manageCustomerDisplay();
    		manageProductDisplay();
	};


// Function to handle form cancel
function handleCancel() {


    // Hide the form overlay
    const formElement = document.getElementById('editProductsOverlay');
    if (formElement) {
        formElement.style.display = 'none';
    }
}

// Function to handle edit button click
function handleEdit(event) {
    console.log('Edit button clicked');
    const productDiv = event.target.closest('.prod_manage');
    if (!productDiv) {
        console.error("Product div not found");
        return;
    }

    const productId = productDiv.dataset.id;
    if (!productId) {
        console.error("Product ID not found");
        return;
    }

    console.log('Product ID:', productId);
    const productRef = database.ref('Products/' + productId);

    productRef.once('value').then((snapshot) => {
        const product = snapshot.val();
        if (!product) {
            console.error("Product data not found");
            return;
        }
        console.log('Product data:', product);

        // Populate the form with product details
        document.getElementById('productName').value = product.ProductName || '';
        console.log('Product Name:', product.ProductName);

        document.getElementById('categorySelect').value = product.Category || '';
        console.log('Product Category:', product.Category);

        // Check and populate product sizes and prices
        if (product.Small) {
            document.getElementById('size1').value = 'Small';
            document.getElementById('productQuantity1').value = product.Small;
            console.log('Small Size Price:', product.Small);
        } else {
            document.getElementById('size1').value = 'Set Size';
            document.getElementById('productQuantity1').value = '';
        }

        if (product.Large) {
            document.getElementById('size2').value = 'Large';
            document.getElementById('productQuantity2').value = product.Large;
            console.log('Large Size Price:', product.Large);
        } else {
            document.getElementById('size2').value = 'Set Size';
            document.getElementById('productQuantity2').value = '';
        }

        // Populate flavors if they exist
        for (let i = 1; i <= 5; i++) {
            const flavorKey = 'Flavor' + i;
            const flavorInput = document.getElementById('productFlavor' + i);
            const flavorContainer = document.getElementById('another_flavor' + (i - 1));
            if (product[flavorKey] && flavorInput) {
                flavorInput.value = product[flavorKey];
                console.log(`Flavor ${i}:`, product[flavorKey]);
                if (i > 1 && flavorContainer) {
                    flavorContainer.style.display = 'block';
                }
            } else if (flavorInput) {
                flavorInput.value = '';
                if (i > 1 && flavorContainer) {
                    flavorContainer.style.display = 'none';
                }
            }
        }

        // Show the form
        const formElement = document.getElementById('overlay');
        if (formElement) {
            formElement.style.display = 'block';
            formElement.style.zIndex = '999'; // Ensuring the form appears in front
        }
        console.log('Form displayed');
    }).catch((error) => {
        console.error("Error fetching product data: ", error);
    });
}


// Add event listener to the Cancel button
document.getElementById('cancel').addEventListener('click', hideForm);




    




function sendProd() {
    const confirmButton = document.getElementById('confirm');
    const productName = document.getElementById('productName').value;
    const size1Select = document.getElementById('size1');
    const size2Select = document.getElementById('size2');
    const productPrice1 = document.getElementById('productQuantity1').value;
    const productPrice2 = document.getElementById('productQuantity2').value;
    let productSize1 = size1Select.value;
    let productSize2 = size2Select.value;
    const selectedCategory = document.getElementById('categorySelect').value;
    const imgFile = document.getElementById('img').files[0];

    const flavors = [];
    for (let i = 1; i <= 5; i++) {
        const flavorInput = document.getElementById('productFlavor' + i);
        if (flavorInput && flavorInput.value.trim() !== '') {
            flavors.push(flavorInput.value.trim());
        }
    }

    document.getElementById('productName').focus();

    if (productName === '') {
        alert("Please enter a product name.");
        return;
    }

    const productsRef = database.ref('Products');


    productsRef.orderByChild('ProductName').equalTo(productName).once('value', (snapshot) => {
        let productExists = false;

        snapshot.forEach((childSnapshot) => {
            const product = childSnapshot.val();
            if (product.Category === selectedCategory) {
                productExists = true;
            }
        });

        if (productExists) {
            alert("This product already exists in the selected category.");
            confirmButton.classList.remove('loading');
            confirmButton.innerHTML = 'Confirm';
            return;
        }

        // Proceed to add the new product
        productsRef.once('value', (snapshot) => {
            const productCount = snapshot.numChildren();
            const newProductKey = 'Product' + (productCount + 1);

            const storageRef = storage.ref().child('productImages/' + imgFile.name);

            storageRef.put(imgFile).then((snapshot) => {
                console.log('Image uploaded successfully');
                return snapshot.ref.getDownloadURL();
            }).then((downloadURL) => {
                // Create product data object
                const productData = {
                    ProductName: productName,
                    Category: selectedCategory,
                    ImageURL: downloadURL
                };

                // Check if size1 is selected
                if (productSize1 && productSize1 !== 'Set Size') {
                    productData[productSize1] = productPrice1;
                }

                // Check if size2 is selected
                if (productSize2 && productSize2 !== 'Set Size') {
                    productData[productSize2] = productPrice2;
                }

                // Add flavors to the product data
                flavors.forEach((flavor, index) => {
                    productData['Flavor' + (index + 1)] = flavor;
                });

                // Set product data to Firebase
                return productsRef.child(newProductKey).set(productData);
            }).then(() => {
                // Product data has been successfully sent to Firebase
                console.log("Product data sent successfully");
                alert("Product data sent successfully!");

                // Clear input fields and select options
                document.getElementById('productName').value = '';
                size1Select.selectedIndex = 0;
                size2Select.selectedIndex = 0;
                document.getElementById('productQuantity1').value = '';
                document.getElementById('productQuantity2').value = '';
                document.getElementById('categorySelect').selectedIndex = 0;
                document.getElementById('img').value = null;

                for (let i = 1; i <= 5; i++) {
                    const flavorInput = document.getElementById('productFlavor' + i);
                    if (flavorInput) {
                        flavorInput.value = '';
                    }
                    if (i > 1) {
                        document.getElementById('another_flavor' + (i - 1)).style.display = 'none';
                    }
                }

                document.getElementById('productName').focus();

                // hideForm(); // Uncomment if you want to hide the form after submission
            }).catch((error) => {
                // Handle errors
                console.error("Error sending product data: ", error);
                alert("Error sending product data: " + error.message);
            }).finally(() => {
                confirmButton.classList.remove('loading');
                confirmButton.innerHTML = 'Confirm';
            });
        });
    });
}


// Reference to the "Products" node in Firebase
const productsRef = firebase.database().ref('Products');

// Function to update the count
function updateProductCount() {
    productsRef.once('value', (snapshot) => {
        // Get the count of child nodes under "Products"
        const productCount = snapshot.numChildren();

        // Update the HTML with the product count
         document.querySelector('.prodNum').innerText = productCount;
    });
}

// Call the function initially to set the initial count
updateProductCount();

// Listen for changes in the "Products" node and update the count accordingly
productsRef.on('child_added', updateProductCount);
productsRef.on('child_removed', updateProductCount);


// code for displaying registered customer
const customerRef = firebase.database().ref('Users');
function updateRegCustomer() {
    customerRef.once('value', (snapshot) => {
        // Get the count of child nodes under "Products"
        const productCount = snapshot.numChildren();

        // Update the HTML with the product count
         document.querySelector('.custNum').innerText = productCount;
    });
}

// Call the function initially to set the initial count
updateRegCustomer();

// Listen for changes in the "Products" node and update the count accordingly
customerRef.on('child_added', updateRegCustomer);
customerRef.on('child_removed', updateRegCustomer);



</script>
</html>