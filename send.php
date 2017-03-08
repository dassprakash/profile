<?php


$name = $_POST['name'];
$email = $_POST['email'];
$subject = 'Dass prakash Site Feedback';
$message = $_POST['message'];
if(trim($name)=='' || trim($email) == '' || trim($subject) == '' || trim($message) =='')
{
	$error ='require';
}else{

$msg='<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td>

					<!-- Header Top Start -->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
						<tr>
							<td>
								<table align="center" border="0" cellpadding="0" cellspacing="0" width="580" style="border-collapse: collapse;">
									<tr>
										<td align="left"  bgcolor="#31292c">
											<!-- Space -->
											<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
												<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
											</table>
											<table align="center">
												<tr>
													<td width="22">
														
													</td>
													<td style="color: #fff; font-size: 12px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif;">Dass prakash Site feedback</td>
													<td width="22"></td>
													<td width="22">
													</td>
													<td style="color: #fff; font-size: 12px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif;"></td>
													<td width="22"></td>
													<td width="22">
														
													</td>
													<td>
														
													</td>
												</tr>
											</table>
											<!-- Space -->
											<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
												<tr><td style="font-size: 0; line-height: 0;" height="10">&nbsp;</td></tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<!-- Header Top End -->

					

					<!-- Footer Start -->
					<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
						<tr>
							<td>
								<table bgcolor="#ffffff" align="center" border="0" cellpadding="0" cellspacing="0" width="580" style="border-collapse: collapse;">
									<tr>
										<td>
											<!-- Space -->
											<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
												<tr><td style="font-size: 0; line-height: 0;" height="30">&nbsp;</td></tr>
											</table>
											<table align="center" border="0" cellpadding="0" cellspacing="0" width="540" style="border-collapse: collapse;">
												<tr>
													<td>
														<!-- First Column -->
														<table align="left" border="0" cellpadding="0" cellspacing="0" width="250" style="border-collapse: collapse;">
															<tr>
																<td>
																	<a href="www.dassprakash.com">
																		www.dassprakash.com
																	</a>
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="20">&nbsp;</td></tr>
															<tr>
																<td style="color: #999999; font-size: 14px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif;">
																	Name
																</td>
																<td style="color: #999999; font-size: 14px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif;">
																	'.$name.'
																</td>
															</tr>
															<tr>
																<td style="color: #999999; font-size: 14px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif;">
																	Email
																</td>
																<td style="color: #999999; font-size: 14px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif;">
																	'.$email.'
																</td>
															</tr>
															<tr>
																<td style="color: #999999; font-size: 14px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif;">
																	Subject
																</td>
																<td style="color: #999999; font-size: 14px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif;">
																	'.$subject.'
																</td>
															</tr>
															<tr>
																<td style="color: #999999; font-size: 14px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif;">
																	Message
																</td>
																<td style="color: #999999; font-size: 14px; line-height: 18px; font-weight: normal; font-family: helvetica, Arial, sans-serif;">
																	'.$message.'
																</td>
															</tr>
															<!-- Space -->
															<tr><td style="font-size: 0; line-height: 0;" height="15">&nbsp;</td></tr>
															<tr>
																<td>
																	
																</td>
															</tr>
														</table>
														
													</td>
												</tr>
											</table>
											<!-- Space -->
											<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
												<tr><td style="font-size: 0; line-height: 0;" height="30">&nbsp;</td></tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>

					</table>
					<!-- Footer End -->

					
			

				</td>
			</tr>
		</table>';


//echo $msg;die;
// send email
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail("dassprakash819@gmail.com",$subject,$msg, $headers);
$scucess='yes';
}
?>