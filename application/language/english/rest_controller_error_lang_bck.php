<?php

/*
 * English language
 */

// Error
$lang['error_exists'] = 'Warning: E-Mail Address is already registered!';
$lang['error_name'] = 'Name must be between 1 and 32 characters!';
$lang['error_lastname'] = 'Last Name must be between 1 and 32 characters!';
$lang['error_email'] = 'E-Mail Address does not appear to be valid!';
$lang['error_telephone'] = ' Mobile number must be 7 to 12 characters!';
$lang['telephone_format'] = 'Telephone must be in a number format';
$lang['error_address_1'] = 'Address must be between 3 and 128 characters!';
$lang['error_city'] = 'City must be between 2 and 128 characters!';
$lang['error_postcode'] = 'Postcode must be between 2 and 10 characters!';
$lang['error_country'] = 'Please select a country!';
$lang['error_zone'] = 'Please select a region / state!';
$lang['error_day'] = 'Please select a date!';
$lang['age_minimum'] = 'User with age less than 13 years will NOT allowed to register.';
$lang['error_month'] = 'Please select a month!';
$lang['error_username'] = 'Please select a Username!';
$lang['error_gender'] = 'Please select a gender!';
$lang['error_country_code'] = 'Please select a valid country code!';
$lang['username_exist'] = 'Warning: User name is already registered!';
$lang['telephone_exist'] = 'Warning: phone number is already registered!';
$lang['email_exist'] = 'Warning: Email is already registered!';
$lang['error_password'] = 'Password must be between 4 and 20 characters!';
$lang['error_permission'] = 'You don’t have permission to access API';
$lang['user_auth_success_message'] = 'Your OTP has been verified and user is activated.';
$lang['user_auth_error_message'] = 'Please try after some time.';
$lang['error_login'] = 'The Email/Phone No you have entered is not valid';
$lang['register_success'] = 'The "One Time Password" (OTP) has been sent to your registered Mobile number/ Email. Please verify your OTP.';
$lang['login_otp'] = 'The "One Time Password" (OTP) has been sent to your registered Mobile number/ Email. Please verify the OTP';
$lang['ios_otp_sms'] = 'Registration request was submitted via happen@ using your mobile number. To confirm registration click on this link happen://?otp=xxx . If the SMS was sent to you by mistake, please ignore it with our apology.';
$lang['otp_verify'] = 'Hello,  XXX  is your OTP for registering  with Happen@ Services.';
$lang['otp_verify_link'] = 'Hello,  XXX  is your OTP for registering  with Happen@ Services. OTP can also be verified using http://happen.com/otpverify=XXX';
$lang['terms_of_service'] = "Please agree the Term of use .";
$lang['password'] = "Please fill the password filed.";
//$lang['login_otp'] = 'Login: Please verify the OTP';
$lang['error_invalid_request'] = 'Invalid happen@ request.';
$lang['error_country_code'] = 'Please enter valid country code ';
$lang['error_general'] = 'Something went wrong with your network connection.';
$lang['happen_added'] = 'Your Happen@ added successfully';
$lang['all_fileds_are_required'] = 'Kindly fill all the required fields';
$lang['error_happen_id'] = 'Invalid request: Please enter a valid Happen@ Code';
$lang['liked_ok'] = 'You have successfully Liked the video';
$lang['liked_not_ok'] = 'You have successfully Unlike the video ';
$lang['disliked_ok'] = 'You have successfully disliked the video';
$lang['disliked_not_ok'] = 'Dislike was unsuccessful...! ';
$lang['report_happen_ok'] = 'Report abuse ';
$lang['error_comment_to'] = 'Invalid request: "to" field in the comment is not valid.';
$lang['add_comment_success'] = 'Comment added successfully ';
$lang['text_happenat_permission'] = 'You don’t have permission to block comment';
$lang['text_happenat_permission_to_comment'] = 'You don’t have permission to add/delete comment';
$lang['text_favorite_updated'] = 'Favourite data updated successfully';
$lang['token_exception_not_available'] = 'Token exception not available';
$lang['text_token_exception'] = 'Token exception not available';

$lang['text_delete_happen'] = 'You cannot delete the happen@ ';
$lang['text_delete_happen_true'] = 'The selected Happen@ has been deleted';
$lang['text_get_favorite_list'] = 'Get favourite list...';
$lang['text_get_favorite_listerror'] = 'Get favourite list error';
$lang['otp_try_error'] = 'Warning: You have reached the max OTP verify attempts for the day. You cannot try more than XXX times per day. Try again later';

$lang['error_update_app'] = 'There is a newer version available for download. Please update the app by visiting the Store';
$lang['error_update_app_ios'] = 'There is a newer version available for download. Please update the app by visiting the Apple Store';
$lang['error_update_app_android'] = 'There is a newer version available for download. Please update the app by visiting the Google Play Store';

$lang['error_alphanumeric'] = 'Please use alphanumeric characters for creating channel name';
$lang['error_alphabetical'] = 'Please use alphabets for creating channel name';
$lang['error_channel_name_length'] = 'Channel name must be minimum XXX characters and maximum ' . MAXIMUM_CHARA . ' characters ';
$lang['error_channel_exist'] = 'You cannot create a new channel.!. You have already created one channel.';
$lang['channel_name_exist'] = 'Channel name already exist. Try a different one.';
$lang['country_of_residence'] = 'Country of residence required';
$lang['nationality'] = 'Nationality required';

$lang['upload_channel_banner_email_users'] = 'Email verified users is NOT allowed to upload banner .';
$lang['upload_channel_logo_email_users'] = 'Email verified users is NOT allowed to upload logo.';
$lang['create_channel_logo_email_users'] = 'Email verified users is NOT allowed to upload logo.';

$lang['upload_channel_banner_phone_verified_users'] = 'Phone verified users is NOT allowed to upload banner.';
$lang['upload_channel_logo_phone_verified'] = 'Phone verified users is NOT allowed to upload logo .';
$lang['create_channel_logo_phone_verified_users'] = 'Phone verified users is NOT allowed to Create logo .';


$lang['upload_channel_banner_members'] = 'Members are NOT allowed to upload banner.';
$lang['create_channel_logo_members'] = 'Members are NOT allowed to upload logo.';
$lang['create_channel_logo_email_users'] = 'Members are NOT allowed to create logo.';
$lang['invalid_logo'] = 'Invalid logo extension. Please use different image format';
$lang['invalid_banner'] = 'Invalid banner extension. Please use different image format';



$lang['userblocked'] = 'Admin/User blocked';
$lang['comment_blocked'] = 'Comment blocked';
$lang['likeblocked'] = 'Like blocked';
$lang['commentblocked'] = 'Comment blocked';
$lang['invalid_user'] = 'Invalid user';
$lang['notprivilageduserpostcomment'] = 'You don’t have permission to post comment';
$lang['notprivilageduser'] = 'Action denied. You don’t have permission';
$lang['invalid_request'] = 'Invalid Request';
$lang['notprivilageduserreceivecomment'] = 'You don’t have permission to receive comment';
$lang['empty_comment'] = 'Comment is empty';
$lang['empty_comment_to'] = 'Empty comment "to" address';
$lang['edit_comment_success'] = 'Comment edited successfully';
$lang['add_private_comment_success'] = 'Private comment added successfully';
$lang['update_private_comment_success'] = 'Private comment edited successfully';
$lang['delete_comment_success'] = 'Comment deleted successfully';
$lang['all_comments'] = 'All comments';
$lang['share_post_success'] = 'You have been successfully shared the happen@';
$lang['empty_happen'] = 'Empty happen';
$lang['edit_comment_failed'] = 'Failed to edit comment';
$lang['only_one_level_nesting_of_comment'] = 'Only one level of nesting possible';
$lang['adding_comment_failed'] = 'Failed to add comment';
$lang['user_already_blocked'] = 'User already blocked ';
$lang['userblocked_success'] = 'You have successfully blocked the user';
$lang['invalid_happen'] = 'Invalid happen@';
$lang['invalid_user'] = 'Invalid user';
$lang['channel_category_creation'] = 'You do not have permission for edit / create channel category';
$lang['country_category_error'] = 'No country category mapped';

$lang['shareblocked'] = 'Share blocked for user';
$lang['Share_action_blocked_for_guest_user'] = 'Share blocked for guest user';
$lang['downloadblocked'] = 'Download blocked for user';
$lang['downloadnotAllowed'] = 'Download allowed for happen';
$lang['disablelikeon'] = 'Like disabled for happen@';
$lang['channel_category_not_available'] = 'Channel category not available';
$lang['add_reporter_success'] = 'You have successfully added the reporter';
$lang['no_happen'] = 'No happen at available';
$lang['channel_category_alreday_available_error'] = 'Channel category already available';
$lang['number_of_reporters_error'] = 'You cannot hire more than XXX reporters for a channel. ';
$lang['get_reporters_error'] = 'No reporters available ';
$lang['no_pending_reporters'] = 'No pending reporters are available ';
$lang['remove_reporter'] = 'You have successfully removed the reporter';
$lang['remove_reporter_error'] = 'Error on removing a reporter';
$lang['approve_reporter_error'] = 'Error while approving a reporter request';
$lang['reject_reporter_error'] = 'Error while rejecting a reporter';
$lang['reporter_approve_request'] = 'You have successfully approved the reporter request';
$lang['reporter_reject_request'] = 'You have rejected the hire as reporter from the channel';
$lang['add_favorite_data_already_exist_error'] = 'Favourite data already exist...!';
$lang['add_favorite_success'] = 'You have successfully added the country to favourite list';
$lang['delete_favorite'] = 'You have successfully deleted the favourite list';
$lang['favorite_country_error'] = 'No favourite country ';
$lang['update_fcm_token_success'] = 'Update FCM token: success';
$lang['update_fcm_token_error'] = 'Update FCM token: error';
$lang['my_reporting_channel_withdraw_success'] = 'You have withdrawn the reporting channel';
$lang['my_reporting_channel_withdraw_error'] = 'Error in withdrawing the reporting channel';
$lang['get_my_reporting_channel_error'] = 'No reporting channel available';


/* api error happen share */


/* abuse report  error */
$lang['blocked_by_channel'] = 'You are blocked by the channel owner';
$lang['report_channel_success'] = 'Successfully reported channel';
$lang['report_happen_success'] = 'Successfully reported happen@';
$lang['report_permission_denied'] = 'Members are only allowed to report';
$lang['report_permission_denied_for_emailbroadcastChannel'] = 'Members or Verified users are only allowed to report';
$lang['comment_report_permission_denied'] = 'Publishers are only allowed to report comment';
$lang['Already_reported_happen'] = 'User have already reported the happen@';
$lang['Already_reported_channel'] = 'User have already reported the channel';
$lang['blocked_by_admin_channel'] = 'User blocked by Admin/Channel';
$lang['Empty_data'] = 'Empty data';
$lang['user_blocked'] = 'User blocked by channel /Admin';
$lang['report_permission_denied_by_channel'] = 'Report permission denied by channel';
$lang['abuse_reportnot_allowed_by_broadcaster'] = 'Broadcaster are NOT allowed to abuse report';
$lang['Already_reported_comment'] = 'You have already reported a comment';
$lang['abusereport_empty_data'] = 'abuse report empty data';

/* api error abuse master data */
$lang['invalid_abuse_data'] = 'invalid data';

//Add Happen
$lang['channel_category_invalid'] = 'Invalid request (channel category) ';
$lang['my_channel_category_invalid'] = 'Invalid request (my channel category) ';
$lang['channel_category_empty'] = 'Invalid / Empty Country category ';
$lang['channel_category_not_empty'] = 'Country category error';
$lang['channel_category_not_mapped'] = 'Reporting Channel category not mapped /not available ';

/* * Download* */
$lang['my_channel_category_invalid'] = 'Invalid request .missing or invalid channel category ';

//Followers
$lang['get_followers_success'] = 'Get followers success';
$lang['get_followers_failed'] = 'Get followers failed';
$lang['get_my_followings_success'] = 'Get followings success';
$lang['get_my_followings_failed'] = 'Failed to retrieve followings list';



/* * ******follow channel ******* */
$lang['folow_channel_error'] = 'follow channel error';
$lang['folow_channel_success'] = 'follow channel success';
$lang['follow_channel_denied'] = 'Following channel denied';
/* like */
$lang['like_not_allowed'] = 'Like not allowed';
$lang['dislike_not_allowed'] = 'Dislike not allowed';

$lang['comment_not_allowed'] = 'Comment not allowed';
$lang['unfollow_success'] = 'Unfollow success';
$lang['unfollow_error'] = 'Unfollow error';
$lang['invalid_channel'] = 'Invalid channel';



$lang['empty_channel_id'] = 'Empty channel id';
$lang['not_follow_entry'] = 'Not follow entry';
$lang['forget_password_try'] = 'Warning: You have reached the max OTP verify attempts for the day .Please try after 24 hours.';
//$lang['forget_password_verify_otp'] = 'Hello,  XXX  is your OTP for retrieving  your'
//        . ' account password  with Happen@ Services. OTP can also be'
//        . ' verified using http://happen.com/forgetpswdotpverify=XXX ';
$lang['forget_password_verify_otp'] = 'Hello, XXX is your OTP retrieving your account password';
$lang['invalid_forget_otp'] = 'Invalid forget forgot password OTP';
$lang['password_reset'] = 'Your password has been reset successfully! |';
$lang['popular_video_by_channel'] = 'Popular channel not available ';
$lang['latest_video_by_channel'] = 'latest channel not available ';


$lang['invalid_type'] = 'Invalid type';
$lang['blocked_success'] = 'Block success';
$lang['hide_success'] = 'Hide success';
$lang['already_blocked_hide'] = 'Already Blocked/Hide';

//promo 
$lang['promo_cat_reservertion_error'] = 'The country "xxx" and category "yyy" booked between qqq to ppp';
$lang['please_update_user'] = 'Please update mobile number to publish Promo@.';
$lang['please_update_user_r'] = 'Please update mobile number to publish Top@.';
$lang['promo_video_link'] = 'Promo video cannot be empty.';
$lang['promo_video_title'] = 'Please enter a title for promo.';
$lang['promo_date_from'] = 'Please enter a valid start date.';
$lang['promo_date_to'] = 'Please enter a valid end date.';
$lang['date_error'] = 'End date must be greater than start date.';
$lang['date_error_extension'] = 'Promo@ extend error: Start date must be greater than end date.';
$lang['no_permission_edit_promo'] = 'You do not have permission to edit this promo@.';
$lang['no_permission_edit_topat'] = 'You do not have permission to edit this top@.';
$lang['no_permission_delete_topat'] = 'You do not have permission to delete this top@.';
$lang['no_permission_edit_topat_n'] = 'You do not have permission to edit this top@ missing.';
$lang['get_my_promo_list_error'] = 'No promo@ available.';
$lang['get_my_top_list_error'] = 'No top@ available.';
$lang['no_permission_edit_topat_payment'] = 'Cannot edit before payment confirmed';
$lang['no_permission_edit_happen'] = 'You do not have permission to edit Happen@';
$lang['no_permission_view_happen'] = 'You do not have permission to view Happen@';
$lang['no_permission'] = 'No permission';


//guest users
$lang['device_id_not_found'] = 'Unique id not found.';
$lang['follow_exist'] = 'Follower not exist';



/* * ******GET STATE UNREAD VIDEO COUNT***** */
$lang['get_state_success'] = 'state video read count success';
$lang['get_state_failed'] = 'state video read count failed';
$lang['invalid_country'] = 'invalid country';
$lang['empty_country_id'] = 'Empty country id';
$lang['get_channel_statistics_error'] = 'Get channel statistics error';
$lang['no_channel_for_user'] = 'No channel exists!';

//*****Notification

$lang['notification_subscription_availabele_error'] = 'Notification subscription already exist.';
$lang['get_premium_channels_error'] = 'Premium channel request error.';


//block hide
$lang['unblocked_success'] = 'Unblock success';
$lang['unblocked_error'] = 'Unblock error';
$lang['blocked_error'] = 'Blocked error';

//MESSAGE ONE TO ONE

$lang['error_invalid_request_message'] = 'Invalid request / You do not have permission to message';
$lang['message_added'] = 'Message added.';

//change email/phone number

$lang['otp_verify_contactdetails'] = 'Hello, XXX  is your OTP for changing contact details with Happen@ Services. OTP can also be verified using http://happen.com/contactupdate=XXX';
///OTP can also be  verified using http://happen.com/contactupdate=XXX
$lang['invalid_otp'] = 'Invalid OTP';
$lang['contact_updated'] = 'Contact details updated';

$lang['error_invalid_request_notification'] = 'Invalid request / You do not have permission to delete notification ';
$lang['get_notification_error'] = 'No notification available.';
$lang['membership_details_error'] = 'Please upgrade to paid member.';
$lang['invalid_transaction'] = 'Invalid transaction data';
$lang['premium_channel_request_added'] = 'You have successfully added premium channel request.';

//ERROR in API 
$lang['user_auth_error_message'] = 'Your OTP is invalid. Please try again.';
$lang['update_profile_error'] = 'Error while updating your profile';
$lang['create_channel_error'] = 'Channel creation error. Something went wrong.';
$lang['get_channel_error'] = 'Channel creation error. Something went wrong.';
$lang['get_logo_repository_error'] = 'Channel logo not available.';
$lang['get_shape_repository_error'] = 'Shapes not available.';
$lang['get_eduction_qualification_list_error'] = 'Education qualification list not available.';
$lang['get_employment_list_error'] = 'Employment list not available.';
$lang['get_country_category_list_error'] = 'Country Category list not available ';
$lang['get_country_wise_state_list'] = 'Country wise state list are not available.';
$lang['get_country_list_error'] = 'Country list is not available ';
$lang['happen_load_error'] = 'Error in loading Happen@';
$lang['get_channel_category_list_error'] = 'Channel Category not available.';
$lang['add_channel_category_error'] = 'Add channel category error.';
$lang['happen_at_upload_error'] = 'Happen@ uploading error.';
$lang['add_reporter_error'] = 'Error in adding reporter.';
$lang['get_channel_hire_reporter_error'] = 'There is no reporter available for this channel.';
$lang['add_favorite_error'] = 'Error in favourite list. ';
$lang['delete_favorite_error'] = 'Error in delete favourite list. ';
$lang['forget_password_success'] = ' Please verify the password `OTP`. ';
$lang['search_error']= ' No records available.';
$lang['membership_error']='Only mobile verified users are eligible to become members';
$lang['upload_channel_logo_members']='Members are NOT allowed to upload logo';
$lang['upload_channel_logo_special_characters_members']='Special characters and spaces are not allowed.';
$lang['channel_categoty_create_error']='You do not  have enough permission to create more than `XXX` channel category.';
$lang['email_subject']=' Happen@ notification ';