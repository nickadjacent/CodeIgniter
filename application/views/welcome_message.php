<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" />
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		#welcome_message {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}
	</style>
</head>

<body>

	<hr>
	<h1>Code Exercise Part 1 : Download CodeIgniter</h1>
	<hr>
	<br>

	<div id="container">
		<h1 id="welcome_message">Welcome to CodeIgniter!</h1>

		<div id="body">
			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

			<p>If you would like to edit this page you'll find it located at:</p>
			<code>application/views/welcome_message.php</code>

			<p>The corresponding controller for this page is found at:</p>
			<code>application/controllers/Welcome.php</code>

			<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>

	<br>
	<br>
	<hr>
	<h1>Code Exercise Part 2 : Zero Configuration DataTable Integration</h1>
	<hr>
	<br>

	<!-- PART 2 - DataTable Integration -->
	<!-- The main trouble I had with this section was understanding the directions. I read the documentation from CodeIgniter and DataTable website. Once I realized it was basically a jQuery library, I understood that I just needed to include the CDN and call the function. -->

	<table id="myTable" class="display" style="width:100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start date</th>
				<th>Salary</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tiger Nixon</td>
				<td>System Architect</td>
				<td>Edinburgh</td>
				<td>61</td>
				<td>2011/04/25</td>
				<td>$320,800</td>
			</tr>
			<tr>
				<td>Garrett Winters</td>
				<td>Accountant</td>
				<td>Tokyo</td>
				<td>63</td>
				<td>2011/07/25</td>
				<td>$170,750</td>
			</tr>
			<tr>
				<td>Ashton Cox</td>
				<td>Junior Technical Author</td>
				<td>San Francisco</td>
				<td>66</td>
				<td>2009/01/12</td>
				<td>$86,000</td>
			</tr>
			<tr>
				<td>Cedric Kelly</td>
				<td>Senior Javascript Developer</td>
				<td>Edinburgh</td>
				<td>22</td>
				<td>2012/03/29</td>
				<td>$433,060</td>
			</tr>
			<tr>
				<td>Airi Satou</td>
				<td>Accountant</td>
				<td>Tokyo</td>
				<td>33</td>
				<td>2008/11/28</td>
				<td>$162,700</td>
			</tr>
			<tr>
				<td>Brielle Williamson</td>
				<td>Integration Specialist</td>
				<td>New York</td>
				<td>61</td>
				<td>2012/12/02</td>
				<td>$372,000</td>
			</tr>
			<tr>
				<td>Herrod Chandler</td>
				<td>Sales Assistant</td>
				<td>San Francisco</td>
				<td>59</td>
				<td>2012/08/06</td>
				<td>$137,500</td>
			</tr>
			<tr>
				<td>Rhona Davidson</td>
				<td>Integration Specialist</td>
				<td>Tokyo</td>
				<td>55</td>
				<td>2010/10/14</td>
				<td>$327,900</td>
			</tr>
			<tr>
				<td>Colleen Hurst</td>
				<td>Javascript Developer</td>
				<td>San Francisco</td>
				<td>39</td>
				<td>2009/09/15</td>
				<td>$205,500</td>
			</tr>
			<tr>
				<td>Sonya Frost</td>
				<td>Software Engineer</td>
				<td>Edinburgh</td>
				<td>23</td>
				<td>2008/12/13</td>
				<td>$103,600</td>
			</tr>
			<tr>
				<td>Jena Gaines</td>
				<td>Office Manager</td>
				<td>London</td>
				<td>30</td>
				<td>2008/12/19</td>
				<td>$90,560</td>
			</tr>
			<tr>
				<td>Quinn Flynn</td>
				<td>Support Lead</td>
				<td>Edinburgh</td>
				<td>22</td>
				<td>2013/03/03</td>
				<td>$342,000</td>
			</tr>
			<tr>
				<td>Charde Marshall</td>
				<td>Regional Director</td>
				<td>San Francisco</td>
				<td>36</td>
				<td>2008/10/16</td>
				<td>$470,600</td>
			</tr>
			<tr>
				<td>Haley Kennedy</td>
				<td>Senior Marketing Designer</td>
				<td>London</td>
				<td>43</td>
				<td>2012/12/18</td>
				<td>$313,500</td>
			</tr>
			<tr>
				<td>Tatyana Fitzpatrick</td>
				<td>Regional Director</td>
				<td>London</td>
				<td>19</td>
				<td>2010/03/17</td>
				<td>$385,750</td>
			</tr>
			<tr>
				<td>Michael Silva</td>
				<td>Marketing Designer</td>
				<td>London</td>
				<td>66</td>
				<td>2012/11/27</td>
				<td>$198,500</td>
			</tr>
			<tr>
				<td>Paul Byrd</td>
				<td>Chief Financial Officer (CFO)</td>
				<td>New York</td>
				<td>64</td>
				<td>2010/06/09</td>
				<td>$725,000</td>
			</tr>
			<tr>
				<td>Gloria Little</td>
				<td>Systems Administrator</td>
				<td>New York</td>
				<td>59</td>
				<td>2009/04/10</td>
				<td>$237,500</td>
			</tr>
			<tr>
				<td>Bradley Greer</td>
				<td>Software Engineer</td>
				<td>London</td>
				<td>41</td>
				<td>2012/10/13</td>
				<td>$132,000</td>
			</tr>
			<tr>
				<td>Dai Rios</td>
				<td>Personnel Lead</td>
				<td>Edinburgh</td>
				<td>35</td>
				<td>2012/09/26</td>
				<td>$217,500</td>
			</tr>
			<tr>
				<td>Jenette Caldwell</td>
				<td>Development Lead</td>
				<td>New York</td>
				<td>30</td>
				<td>2011/09/03</td>
				<td>$345,000</td>
			</tr>
			<tr>
				<td>Yuri Berry</td>
				<td>Chief Marketing Officer (CMO)</td>
				<td>New York</td>
				<td>40</td>
				<td>2009/06/25</td>
				<td>$675,000</td>
			</tr>
			<tr>
				<td>Caesar Vance</td>
				<td>Pre-Sales Support</td>
				<td>New York</td>
				<td>21</td>
				<td>2011/12/12</td>
				<td>$106,450</td>
			</tr>
			<tr>
				<td>Doris Wilder</td>
				<td>Sales Assistant</td>
				<td>Sydney</td>
				<td>23</td>
				<td>2010/09/20</td>
				<td>$85,600</td>
			</tr>
			<tr>
				<td>Angelica Ramos</td>
				<td>Chief Executive Officer (CEO)</td>
				<td>London</td>
				<td>47</td>
				<td>2009/10/09</td>
				<td>$1,200,000</td>
			</tr>
			<tr>
				<td>Gavin Joyce</td>
				<td>Developer</td>
				<td>Edinburgh</td>
				<td>42</td>
				<td>2010/12/22</td>
				<td>$92,575</td>
			</tr>
			<tr>
				<td>Jennifer Chang</td>
				<td>Regional Director</td>
				<td>Singapore</td>
				<td>28</td>
				<td>2010/11/14</td>
				<td>$357,650</td>
			</tr>
			<tr>
				<td>Brenden Wagner</td>
				<td>Software Engineer</td>
				<td>San Francisco</td>
				<td>28</td>
				<td>2011/06/07</td>
				<td>$206,850</td>
			</tr>
			<tr>
				<td>Fiona Green</td>
				<td>Chief Operating Officer (COO)</td>
				<td>San Francisco</td>
				<td>48</td>
				<td>2010/03/11</td>
				<td>$850,000</td>
			</tr>
			<tr>
				<td>Shou Itou</td>
				<td>Regional Marketing</td>
				<td>Tokyo</td>
				<td>20</td>
				<td>2011/08/14</td>
				<td>$163,000</td>
			</tr>
			<tr>
				<td>Michelle House</td>
				<td>Integration Specialist</td>
				<td>Sydney</td>
				<td>37</td>
				<td>2011/06/02</td>
				<td>$95,400</td>
			</tr>
			<tr>
				<td>Suki Burks</td>
				<td>Developer</td>
				<td>London</td>
				<td>53</td>
				<td>2009/10/22</td>
				<td>$114,500</td>
			</tr>
			<tr>
				<td>Prescott Bartlett</td>
				<td>Technical Author</td>
				<td>London</td>
				<td>27</td>
				<td>2011/05/07</td>
				<td>$145,000</td>
			</tr>
			<tr>
				<td>Gavin Cortez</td>
				<td>Team Leader</td>
				<td>San Francisco</td>
				<td>22</td>
				<td>2008/10/26</td>
				<td>$235,500</td>
			</tr>
			<tr>
				<td>Martena Mccray</td>
				<td>Post-Sales support</td>
				<td>Edinburgh</td>
				<td>46</td>
				<td>2011/03/09</td>
				<td>$324,050</td>
			</tr>
			<tr>
				<td>Unity Butler</td>
				<td>Marketing Designer</td>
				<td>San Francisco</td>
				<td>47</td>
				<td>2009/12/09</td>
				<td>$85,675</td>
			</tr>
			<tr>
				<td>Howard Hatfield</td>
				<td>Office Manager</td>
				<td>San Francisco</td>
				<td>51</td>
				<td>2008/12/16</td>
				<td>$164,500</td>
			</tr>
			<tr>
				<td>Hope Fuentes</td>
				<td>Secretary</td>
				<td>San Francisco</td>
				<td>41</td>
				<td>2010/02/12</td>
				<td>$109,850</td>
			</tr>
			<tr>
				<td>Vivian Harrell</td>
				<td>Financial Controller</td>
				<td>San Francisco</td>
				<td>62</td>
				<td>2009/02/14</td>
				<td>$452,500</td>
			</tr>
			<tr>
				<td>Timothy Mooney</td>
				<td>Office Manager</td>
				<td>London</td>
				<td>37</td>
				<td>2008/12/11</td>
				<td>$136,200</td>
			</tr>
			<tr>
				<td>Jackson Bradshaw</td>
				<td>Director</td>
				<td>New York</td>
				<td>65</td>
				<td>2008/09/26</td>
				<td>$645,750</td>
			</tr>
			<tr>
				<td>Olivia Liang</td>
				<td>Support Engineer</td>
				<td>Singapore</td>
				<td>64</td>
				<td>2011/02/03</td>
				<td>$234,500</td>
			</tr>
			<tr>
				<td>Bruno Nash</td>
				<td>Software Engineer</td>
				<td>London</td>
				<td>38</td>
				<td>2011/05/03</td>
				<td>$163,500</td>
			</tr>
			<tr>
				<td>Sakura Yamamoto</td>
				<td>Support Engineer</td>
				<td>Tokyo</td>
				<td>37</td>
				<td>2009/08/19</td>
				<td>$139,575</td>
			</tr>
			<tr>
				<td>Thor Walton</td>
				<td>Developer</td>
				<td>New York</td>
				<td>61</td>
				<td>2013/08/11</td>
				<td>$98,540</td>
			</tr>
			<tr>
				<td>Finn Camacho</td>
				<td>Support Engineer</td>
				<td>San Francisco</td>
				<td>47</td>
				<td>2009/07/07</td>
				<td>$87,500</td>
			</tr>
			<tr>
				<td>Serge Baldwin</td>
				<td>Data Coordinator</td>
				<td>Singapore</td>
				<td>64</td>
				<td>2012/04/09</td>
				<td>$138,575</td>
			</tr>
			<tr>
				<td>Zenaida Frank</td>
				<td>Software Engineer</td>
				<td>New York</td>
				<td>63</td>
				<td>2010/01/04</td>
				<td>$125,250</td>
			</tr>
			<tr>
				<td>Zorita Serrano</td>
				<td>Software Engineer</td>
				<td>San Francisco</td>
				<td>56</td>
				<td>2012/06/01</td>
				<td>$115,000</td>
			</tr>
			<tr>
				<td>Jennifer Acosta</td>
				<td>Junior Javascript Developer</td>
				<td>Edinburgh</td>
				<td>43</td>
				<td>2013/02/01</td>
				<td>$75,650</td>
			</tr>
			<tr>
				<td>Cara Stevens</td>
				<td>Sales Assistant</td>
				<td>New York</td>
				<td>46</td>
				<td>2011/12/06</td>
				<td>$145,600</td>
			</tr>
			<tr>
				<td>Hermione Butler</td>
				<td>Regional Director</td>
				<td>London</td>
				<td>47</td>
				<td>2011/03/21</td>
				<td>$356,250</td>
			</tr>
			<tr>
				<td>Lael Greer</td>
				<td>Systems Administrator</td>
				<td>London</td>
				<td>21</td>
				<td>2009/02/27</td>
				<td>$103,500</td>
			</tr>
			<tr>
				<td>Jonas Alexander</td>
				<td>Developer</td>
				<td>San Francisco</td>
				<td>30</td>
				<td>2010/07/14</td>
				<td>$86,500</td>
			</tr>
			<tr>
				<td>Shad Decker</td>
				<td>Regional Director</td>
				<td>Edinburgh</td>
				<td>51</td>
				<td>2008/11/13</td>
				<td>$183,000</td>
			</tr>
			<tr>
				<td>Michael Bruce</td>
				<td>Javascript Developer</td>
				<td>Singapore</td>
				<td>29</td>
				<td>2011/06/27</td>
				<td>$183,000</td>
			</tr>
			<tr>
				<td>Donna Snider</td>
				<td>Customer Support</td>
				<td>New York</td>
				<td>27</td>
				<td>2011/01/25</td>
				<td>$112,000</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<th>Name</th>
				<th>Position</th>
				<th>Office</th>
				<th>Age</th>
				<th>Start date</th>
				<th>Salary</th>
			</tr>
		</tfoot>
	</table>

	<script>
		$(document).ready(function() {
			$('#myTable').DataTable();
		});
	</script>

	<br>
	<br>
	<hr>
	<h1>Code Exercise Part 3 : CRUD Form</h1>
	<hr>
	<br>

	<!-- PART 3 - CRUD FORM -->

	<div class="container-fluid" style="width: 50%">
		<h1 class="text-center">Add A User</h1>
		<div class="container" style="width:80%">
			<?php echo form_open('user/addUser') ?>
			<div class="form-group">
				<label>Username:<sup>*</sup></label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>First Name:<sup>*</sup></label>
				<input type="text" name="first_name" class="form-control">
			</div>
			<div class="form-group">
				<label>Last Name:<sup>*</sup></label>
				<input type="text" name="last_name" class="form-control">
			</div>
			<div class="form-group">
				<label>Email Address:<sup>*</sup></label>
				<input type="email" name="email_address" class="form-control">
			</div>
			<div class="form-group text-right" style=" margin-top: 5px; ">
				<input type="submit" class="btn btn-primary" value="Submit">
			</div>
			<?php echo form_close() ?>
		</div>
	</div>

	<div class="container-fluid">

		<div class="container-fluid">
			<div class="container-fluid py-5 text-center">
				<h1>Users</h1>
			</div>
			<div class="container">
				<table id="userTable" class="display">
					<thead>
						<th class="text-center">Username</th>
						<th class="text-center">First Name</th>
						<th class="text-center">Last Name</th>
						<th class="text-center">Email Address</th>
						<th class="text-center"></th>
						<th class="text-center"></th>
					</thead>
					<?php foreach ($users as $user) { ?>
						<tbody>
							<td><?php echo $user->username; ?></td>
							<td><?php echo $user->first_name; ?></td>
							<td><?php echo $user->last_name; ?></td>
							<td><?php echo $user->email_address; ?></td>
							<td>
								<?php echo form_open('user/editUser/' . $user->id) ?>
								<button type="submit" class="btn btn-outline-warning">Edit User</button>
								<?php echo form_close() ?>
							</td>
							<td>
								<?php echo form_open('user/deleteUser/' . $user->id)
								?>
								<button type="submit" class="btn btn-outline-danger">Delete User</button>
								<?php echo form_close()
								?>
							</td>
						</tbody>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('#userTable').DataTable();
		});
	</script>
</body>

</html>