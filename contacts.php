<?php include('core/init.php'); ?>
<?php include('libraries/Database.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("SELECT * FROM `contacts`");

//Assign Result Set
$contacts = $db->resultset();
?>


<div class="row">
		<div class="large-12 columns">
			<table>
				<thead>
					<tr>
						<th width="200">Name</th>
						<th width="130">Email</th>
						<th width="200">Phone Number</th>
						<th width="250">Address</th>
						<th width="100">Country</th>
						<th width="200">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($contacts as $contact) : ?>
					<tr>
						<td><a href="contact.html"><?php echo $contact->first_name.' '.$contact->last_name; ?></a></td>
						<td><?php echo $contact->email; ?></td>
						<td><?php echo $contact->phone; ?></td>
						<td><?php echo $contact->Address; ?></td>
						<td><?php echo $contact->Country; ?></td>
						<td>
							<ul class="button-group">
								<li>
									<a href="#" class="button tiny" data-reveal-id="editModal<?php echo $contact->id; ?>" data-contact-id="<?php echo $contact->id; ?>">Edit</a>
									<div id = "editModal<?php echo $contact->id; ?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>
										<h2>Edit Contact</h2>
										<form id="editContact" action="#" method="post">
											<div class="row">
												<div class="large-6 columns">
												<label>First Name
													<input name="first_name" type="text" placeholder="Enter First Name" value="<?php echo $contact->first_name; ?>" />
												</label>
												</div>
												<div class="large-6 columns">
												<label>Last Name
													<input name="last_name" type="text" placeholder="Enter Last Name" value="<?php echo $contact->last_name; ?>" />
												</label>
												</div>
											</div>
											<div class="row">
												<div class="large-6 columns">
												<label>Email
													<input name="email" type="email" placeholder="Enter Email Address" value="<?php echo $contact->email; ?>" />
												</label>
												</div>
												<div class="large-6 columns">
												<label>Phone Number
													<input name="phone" type="text" placeholder="Enter Phone Number" value="<?php echo $contact->phone; ?>" />
												</label>
											</div>
											<div class="row">
												<div class="large-6 columns">
												<label>Address
													<input name="Address" type="text" placeholder="Enter Address" value="<?php echo $contact->Address; ?>" />
												</label>
											</div>
											<div class="row">
												<div class="large-6 columns">
												<label>Country
													<input name="country" type="text" placeholder="Enter Country" value="<?php echo $contact->Country; ?>" />
												</label>
											</div>
											<input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
											<input name="submit" type="submit" class="add-btn button right small" value="Submit">
												<a class="close-reveal-modal">&#215;</a>
										</form>
									</div>
								</li>
								<li>
									<form id="deleteContact" action="#" method="post">
										<input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
										<input type="submit" class="delete-btn button tiny alert" value="Delete" />
									</form>
								</li>
							</ul>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div> 