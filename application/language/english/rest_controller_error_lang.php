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
$lang['error_day'] = 'Please select a date !';
$lang['error_day_to'] = 'Please select a End date !';
$lang['error_day_from'] = 'Please select a Start date !';
$lang['age_minimum'] = 'User with age less than 13 years will not be allowed to register.';
$lang['error_month'] = 'Please select a month !';
$lang['error_username'] = 'Please select a Username !';
$lang['error_gender'] = 'Please select a gender !';
$lang['error_country_code'] = 'Please select a valid country code !';
$lang['username_exist'] = 'Warning:User name is already registered!';
$lang['telephone_exist'] = 'Warning:phone number is already registered!';
$lang['email_exist'] = 'Warning:Email is already registered!';
$lang['error_password'] = 'Password must be between 4 and 20 characters!';
$lang['error_permission'] = 'You do not have permission to access API';
$lang['user_auth_success_message'] = 'Your OTP has been verified and user is activated .';
$lang['user_auth_error_message'] = 'Please try after some time.';
$lang['error_login'] = 'Invalid login ID or password.';
$lang['register_success'] = 'The "One Time Password" (OTP) has been sent to your registered Mobile number/ Email . Please verify  your OTP.';
$lang['login_otp'] = 'The "One Time Password" (OTP) has been sent to your registered Mobile number/ Email. Please varify the OTP';
$lang['ios_otp_sms'] = 'Registration request was submitted via happen@ using your mobile number. To confirm registartion click on this link happen://?otp=xxx . If the SMS was sent to you by mistake please ignore it with our apology.';
$lang['otp_verify'] = 'Hello,  XXX  is your OTP for registering   with Happen@ Services.';
//$lang['otp_verify_link'] = 'Hello,  XXX  is your OTP for registering   with Happen@ Services. OTP can also be verified using http://192.168.2.147/REAHAP10/web/otpverify=XXX';
$lang['otp_verify_link'] = 'Hello,  XXX  is your OTP for registering   with Happen@ Services. OTP can also be verified using https://demo.com/demo/otp?otpverify=XXX';


$lang['terms_of_service'] = "Please agree the Term of use .";
$lang['password'] = "Please fill the password filed.";
//$lang['login_otp'] = 'Login:Please varify the OTP';
$lang['error_invalid_request'] = 'Invalid happen@ request.';
$lang['error_country_code'] = 'Please enter valid country code ';
$lang['error_general'] = 'Something went wrong with your network connection.';
$lang['happen_added'] = 'Your Happen@ added successfully';
$lang['all_fileds_are_required'] = 'KIndly fill all the required fields';
$lang['error_happen_id'] = 'Invalid request : Please enter a valid Happen@ Code';
$lang['liked_ok'] = 'You have successfully Liked the video';
$lang['liked_not_ok'] = 'You have successfully UnLiked the video ';
$lang['disliked_ok'] = 'You have successfully Diliked the video';
$lang['disliked_not_ok'] = 'Dislike was  unsuccesssfull..! ';
$lang['report_happen_ok'] = 'Report abuse ';
$lang['error_comment_to'] = 'Invalid request : "to" field in the comment is not valid.';
$lang['add_comment_success'] = 'Comment added successfully ';
$lang['text_demo_permission'] = 'You do not have  permission to block comment';
$lang['text_demo_permission_to_comment'] = 'You do not have permission to add/delete  comment';
$lang['text_favorite_updated'] = 'Favorite data updated successfully';
$lang['token_exception_not_available'] = 'Token exception not available';
$lang['text_token_exception'] = 'Token exception not available';

$lang['text_delete_happen'] = 'You cannot delete the happen@ ';
$lang['text_delete_happen_true'] = 'The selected Happen@  has been deleted  ';
$lang['text_get_favorite_list'] = 'Get favourite list...';
$lang['text_get_favorite_listerror'] = 'Get favourite list error';
$lang['otp_try_error'] = 'Warnig : You have reached the max OTP verify attempts for the day. You cannot try  more than XXX times per day.Try again later';

$lang['error_update_app'] = 'There is a newer version available for download. Please update the app by visiting the  Store';
$lang['error_update_app_ios'] = 'There is a newer version available for download. Please update the app by visiting the Apple Store';
$lang['error_update_app_android'] = 'There is a newer version available for download. Please update the app by visiting the Google Play Store';

$lang['error_alphanumeric'] = 'Please use alphanumeric characters for creating channel name';
$lang['error_alphabetical'] = 'Please use alphabets for creating channel name';
$lang['error_channel_name_length'] = 'Channel name must be minimum XXX characters and  maximum   characters ';
$lang['error_channel_exist'] = 'You cannot create a new  channel.! . You have already created one channel.';
$lang['channel_name_exist'] = 'Channel name already exist. Try a different one.';
$lang['country_of_residence'] = 'Country of residence required';
$lang['nationality'] = 'Nationality required';

$lang['upload_channel_banner_email_users'] = 'Email verified users is NOT allowed to upload banner .';
$lang['upload_channel_logo_email_users'] = 'Email verified users is NOT allowed to upload logo .';
$lang['create_channel_logo_email_users'] = 'Email verified users is NOT allowed to create logo .';

$lang['upload_channel_banner_phone_verified_users'] = 'Phone verified users is NOT allowed to  upload banner .';
$lang['upload_channel_logo_phone_verified'] = 'Phone verified users is NOT allowed to  upload logo .';
$lang['create_channel_logo_phone_verified_users'] = 'Phone verified users is NOT allowed to  Create logo .';


$lang['upload_channel_banner_members'] = 'Members are NOT allowed to  upload banner .';
$lang['create_channel_logo_members'] = 'Members are NOT allowed to upload logo .';
$lang['create_channel_logo_email_users'] = 'Email users are NOT allowed to create logo .';
$lang['invalid_logo'] = 'Invalid logo extension.Please use different image format';
$lang['invalid_banner'] = 'Invalid banner extension.Please use different image format';
$lang['userblocked_login_user'] = 'Access denied :You have been blocked by admin.';


$lang['userblockeda'] = 'Admin blocked';
$lang['userblockedu'] = 'User blocked';
$lang['userblocked'] = 'Blocked. Action denied!';
$lang['comment_blocked'] = 'You are  blocked from commenting on this video';
$lang['likeblocked'] = 'Like blocked';
$lang['commentblocked'] = 'You are  blocked from commenting on this video';
$lang['invalid_user'] = 'Invalid user';
$lang['notprivilageduserpostcomment'] = 'You do not have permission to post comment';
$lang['notprivilageduser'] = 'Action denied .You do not have permission';
$lang['invalid_request'] = 'Invalid Request';
$lang['notprivilageduserreceivecomment'] = 'You do not have permission to  receive comment';
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
$lang['channel_category_creation'] = 'You do not have permission to create channel category';
$lang['country_category_error'] = 'No country category mapped';
$lang['channel_category_creation_create'] = 'You do not have permission to create channel category';

$lang['shareblocked'] = 'Share  blocked for user';
$lang['Share_action_blocked_for_guest_user'] = 'Share  blocked for guest user';
$lang['downloadblocked'] = 'Download  blocked for user';
$lang['downloadnotAllowed'] = 'Download  allowed for happen';
$lang['disablelikeon'] = 'Like disabled for happen@';
$lang['channel_category_not_available'] = 'Channel category not available';
$lang['add_reporter_success'] = 'You have successfully added a reporter';
$lang['no_happen'] = 'No happen at available';
$lang['channel_category_alreday_available_error'] = 'Channel category alreday available';
$lang['number_of_reporters_error'] = 'You cannot  hire more than XXX  reporters for a channel. ';
$lang['get_reporters_error'] = 'No reporters available ';
$lang['no_pending_reporters'] = 'No pending reporters available ';
$lang['remove_reporter'] = 'You have successfully removed a reporter';
$lang['remove_reporter_error'] = 'Error on removing a reporter';
$lang['approve_reporter_error'] = 'Error in approve a reporter';
$lang['reject_reporter_error'] = 'Error in reject a reporter';
$lang['reporter_approve_request'] = 'You have successfully approved reporter request';
$lang['reporter_reject_request'] = 'You have rejected the hire as reporter from the channel';
$lang['add_favorite_data_already_exist_error'] = 'Favourite data already exist...!';
$lang['add_favorite_success'] = 'You have successfully added the country to favourite list';
$lang['delete_favorite'] = 'You have successfully deleted the favourite list';
$lang['favorite_country_error'] = 'No favourite country ';
$lang['update_fcm_token_success'] = 'Update FCM token : success';
$lang['update_fcm_token_error'] = 'Update FCM token : error';
$lang['my_reporting_channel_withdraw_success'] = 'You have withdraw the reporting channel';
$lang['my_reporting_channel_withdraw_error'] = 'Error on withdraw the reporting channel';
$lang['get_my_reporting_channel_error'] = 'No reporting channel available';


/* api error happen share */


/* abuse report  error */
$lang['blocked_by_channel'] = 'You are blocked by channel';
$lang['report_channel_success'] = 'Succesfully reported  channel abuse  ';
$lang['report_happen_success'] = 'Succesfully reported  happen@ abuse ';
$lang['report_comment_success'] = 'Succesfully reported  happen@ comment';
$lang['report_permission_denied'] = 'Members are only allowed to report';
$lang['report_permission_denied_for_emailbroadcastChannel'] = 'Members or Verified users are only allowed to report';
$lang['comment_report_permission_denied'] = 'Publishers are only allowed to report comment';
$lang['Already_reported_happen'] = 'User have already reported the happen@';
$lang['Already_reported_channel'] = 'User have already reported the channel';
$lang['blocked_by_admin_channel'] = 'You have been blocked by Admin/Channel';
$lang['blocked_by_user_channel'] = 'Access denied. Channel is blocked/hidden for you';
$lang['blocked_by_channel_by_me'] = 'Access denied. Either the channel is blocked/hidden by you or  the channel is blocked by Happen@ Admin';
$lang['blocked_by_me'] = 'Access denied. Channel is blocked/hide by you';
$lang['Empty_data'] = 'Empty data';
$lang['user_blocked'] = 'User have been blocked by channel /Admin';
$lang['report_permission_denied_by_channel'] = 'Report permission denied by channel';
$lang['abuse_reportnot_allowed_by_broadcaster'] = 'You do not have permission to report abuse';
$lang['Already_reported_comment'] = 'Already reported comment';
$lang['abusereport_empty_data'] = 'Abusereport empty data';

/* api error abuse master data */
$lang['invalid_abuse_data'] = 'invalid data';

//Add Happen
$lang['channel_category_invalid'] = 'Invalid request (channel category) ';
$lang['my_channel_category_invalid'] = 'Invalid request (my channel category) ';
$lang['channel_category_empty'] = 'Invalid / Empty Country category ';
$lang['channel_category_not_empty'] = 'Country category error';
$lang['channel_category_not_mapped'] = 'Reporting Channel category not mapped /not available ';

/* * Download* */
$lang['my_channel_category_invalid'] = 'Invalid request (my channel category) ';

//Followers
$lang['get_followers_success'] = 'Get followers success';
$lang['get_followers_failed'] = 'Get followers failed';
$lang['get_my_followings_success'] = 'Get followings success';
$lang['get_my_followings_failed'] = 'Get my followings failed';



/* * ******follow channel ******* */
$lang['folow_channel_error'] = 'follow channel error';
$lang['folow_channel_success'] = 'follow channel success';
$lang['follow_channel_denied'] = 'Action denied . You do not have permission to follow';
/* like */
$lang['like_not_allowed'] = 'Like not allowed';
$lang['dislike_not_allowed'] = 'Dislike not allowed';

$lang['comment_not_allowed'] = 'Comment not allowed';
$lang['unfollow_success'] = 'Unfollow success';
$lang['unfollow_error'] = 'Unfollow error';
$lang['invalid_channel'] = 'Invalid channel';



$lang['empty_channel_id'] = 'Empty channel id';
$lang['not_follow_entry'] = 'Not follow entry';
$lang['forget_password_try'] = 'Warnig : You have reached the max OTP verify attempts for the day .Please try after 24 hours.';
//$lang['forget_password_verify_otp'] = 'Hello,  XXX  is your OTP for retrieving  your'
//        . ' account password  with Happen@ Services. OTP can also be'
//        . ' verified using http://192.168.2.147/REAHAP10/web/forgetpswdotpverify=XXX ';
$lang['forget_password_verify_otp'] = 'Hello, XXX is your OTP retrieving your account password https://demo.com/demo/otp?verify_forgotpassword=XXX';
$lang['invalid_forget_otp'] = 'Invalid forget password OTP';
$lang['password_reset'] = 'Your password has been reset successfully! |';
$lang['popular_video_by_channel'] = 'Popular channel not available ';
$lang['latest_video_by_channel'] = 'latest  channel not available ';


$lang['invalid_type'] = 'Invalid type';
$lang['blocked_success'] = 'Blocked successfully';
$lang['hide_success'] = 'Hide successfully';
$lang['already_blocked_hide'] = 'Already Blocked/Hide';

//promo 
$lang['promo_cat_reservertion_error'] = 'The country "xxx" and category "yyy" booked between qqq to ppp';
$lang['please_update_user'] = 'Please update mobile number to publish Promo@.';
$lang['please_update_user_r'] = 'Please update mobile number to publish Top@.';
$lang['promo_video_link'] = 'Promo video cannot be empty.';
$lang['promo_video_title'] = 'Please enter a title for promo.';
$lang['promo_date_from'] = 'Please enter a valide start date.';
$lang['promo_date_to'] = 'Please enter a valide end date.';
$lang['date_error'] = 'End date must be greater than start date.';
$lang['date_error_extension'] = 'Promo@ extend error : Start date of the new  promo  should be greater than  the end date of the extended .';
$lang['no_permission_edit_promo'] = 'You do not  edit this promo@.';
$lang['no_permission_edit_topat'] = 'You do not have permission to edit this top@.';
$lang['no_permission_delete_topat'] = 'You do not have permission to delete this top@.';
$lang['no_permission_edit_topat_n'] = 'You do not have permission to edit this top@ .';
$lang['get_my_promo_list_error'] = 'No promo@ available.';
$lang['edit_promo_error'] = 'Error in edit promo';
$lang['get_my_top_list_error'] = 'No top@ available.';
$lang['no_permission_edit_topat_payment'] = 'Cannot edit before payment confirmed';
$lang['no_permission_edit_happen'] = 'You do not have permission to edit Happen@';
$lang['no_permission_view_happen'] = 'You do not have permission to view Happen@';
$lang['no_permission'] = 'No permission';
$lang['no_permission_block'] = 'You do not have permission to block this video/channel';
$lang['no_permission_hide'] = 'You do not have permission to hide this video/channel';

//guest users
$lang['device_id_not_found'] = 'Unique id not found.';
$lang['follow_exist'] = 'Follow not exist';



/* * ******GET STATE UNREAD VIDEO COUNT***** */
$lang['get_state_success'] = 'state video read count success';
$lang['get_state_failed'] = 'state video  read count failed';
$lang['invalid_country'] = 'invalid country';
$lang['empty_country_id'] = 'Empty country id';
$lang['get_channel_statistics_error'] = 'Get channel statistics error';
$lang['no_channel_for_user'] = 'No channel exists!';

//*****Notification

$lang['notification_subscription_availabele_error'] = 'Notification subscription alreday exist.';
$lang['get_premium_channels_error'] = 'Get premium channels error';


//block hide
$lang['unblocked_success'] = 'Unblocked successfully';
$lang['unhide_success'] = 'Unhide successfully';
$lang['unblocked_error'] = 'Unblock/Unhide failed';
$lang['blocked_error'] = 'Block/Hide failed';

//MESSAGE ONE TO ONE

$lang['error_invalid_request_message'] = 'Invalid request : you can send message only for the hired (accepted) reporters.';
$lang['message_added'] = 'Message added.';

//change email/phone number

$lang['otp_verify_contactdetails'] = 'Hello,  XXX  is your OTP for changing contact details with Happen@ Services.OTP can also be  verified using https://demo.com/demo/otp?verify_change_contact=XXX';
///OTP can also be  verified using http://192.168.2.147/REAHAP10/web/contactupdate=XXX
$lang['invalid_otp'] = 'Invalid OTP';
$lang['contact_updated'] = 'Contact details updated';

$lang['error_invalid_request_notification'] = 'Invalid request / You do not have permission to delete notification ';
$lang['get_notification_error'] = 'No notification available.';
$lang['membership_details_error'] = 'Please upgrade to paid member.';
$lang['invalid_transaction'] = 'Invalid transaction data';
$lang['duplicate_entry'] = 'Duplicate entry';
$lang['premium_channel_request_added'] = 'You have successfully added premium channel request.';

//ERROR in API 
$lang['user_auth_error_message'] = 'Your OTP is invalid .Please try again.';
$lang['update_profile_error'] = 'Profile error occurred. Something went wrong when updating your profile';
$lang['create_channel_error'] = 'Channel create error.Something went wrong.';
$lang['get_channel_error'] = 'Channel create error.Something went wrong.';
$lang['get_logo_repository_error'] = 'Channel logo not available.';
$lang['get_shape_repository_error'] = 'Sample shapes not available.';
$lang['get_eduction_qualification_list_error'] = 'Eduction qualification list not available .';
$lang['get_employment_list_error'] = 'Employment list not available .';
$lang['get_country_category_list_error'] = 'Country Category list not available /error .';
$lang['get_country_wise_state_list'] = 'Country wise state list not available .';
$lang['get_country_list_error'] = 'No Happen@ available for selected channel/country. ' ;
$lang['happen_load_error'] = 'Get happen at load error';
$lang['get_channel_category_list_error'] = 'Channel Category  not available /error .';
$lang['add_channel_category_error'] = 'Add channel category error .';
$lang['add_channel_category_success'] = 'Channel category added successfully  .';
$lang['edit_channel_category_success'] = 'Channel category edited successfully  .';
$lang['happen_at_upload_error'] = '  Happen@ uploading error.';
$lang['add_reporter_error'] = 'Error in add reporter.';
$lang['add_reporter_permission_error'] = 'You do not have permission to hire reporter.';
$lang['get_channel_hire_reporter_error'] = 'There is no reporter available for this channel.';
$lang['add_favorite_error'] = 'Error in  favorite list. ';
$lang['delete_favorite_error'] = 'Error in delete favorite list. ';
$lang['forget_password_success'] = ' Please varify the password `OTP`. ';
$lang['search_error']= ' No records available.';
$lang['membership_error']='Only mobile verified users are eligible to become Members';
$lang['upload_channel_logo_members']='Members are NOT allowed to upload logo';
$lang['upload_channel_logo_special_characters_members']='Special characters and spaces not allowed.';
$lang['channel_categoty_create_error']='You do not have permission to create more than `XXX` channel category.';
$lang['email_subject']=' Happen@ notification ';
$lang['no_permission_to_hire_reporters']='You do not have permission to hire reporter.';
$lang['upload_channel_logo_special_characters_members']='Channel name contains invalid characters.';
$lang['create_channel_error']='No permission to create channel';

$lang['create_channel_theme']='No permission to create channel theme.';
$lang['upload_channel_theme']='No permission to upload channel theme.';
$lang['channel_category_rename']='No permission to rename channel category.';
$lang['no_delete_demo']='No permission to delete Happen@.';
$lang['happen_updated']='Updated successfully';
$lang['reporter_email_disable'] = 'You cannot add email verified user as reporter  ';
$lang['pending_premium_channel_request'] = 'Cannot create channel : You have a pending premium channel request !!!  ';


$lang['cant_delete_admin_category'] = 'Can not delete admin category ';
$lang['no_permission_delete_channel_category'] = 'No permission to delete this channel category  ';
$lang['delete_channel_video'] = 'Please delete  happen@ from the channel category';
$lang['channel_category_deleted'] = 'Channel Category Deleted ';

$lang['allow_top_at_error_admin_blocked'] = 'Admin removed permission for upgrade this Happen@ to TOP@';
$lang['happen_blocked_by_admin'] = 'Your Happen@ have been blocked by admin. ';
$lang['privacy_updated'] = 'Privacy updated';
$lang['channel_category_updated'] = 'Channel category  updated';
$lang['channel_category_updated_error'] = 'Error on channel category  updation.';
$lang['update_status_sucess'] = 'Payment Status Updated.';
$lang['update_status_error'] = 'Error while updating payment status.';
$lang['happen_under_process'] = 'Happen@ is underprocessing.Top@ will be active once the happen@ is live';
$lang['broadcast_later'] = 'Happen@ is in broadcast later.Top@ date must be greater than happen@ date ';

$lang['top_at_payment'] = 'No payment required.There is no change in category and date/ new date is in between the top@ date. ';
$lang['happen_deleted'] = 'Happen@ video you are trying to play is deleted.';
$lang['happen_expired'] = 'Happen@ video you are trying to play is expired.';
$lang['happen_processing'] = 'Happen@ video you are trying to play is under processing.';