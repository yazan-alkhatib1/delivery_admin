<?php

use App\Models\DefaultKeyword;
use App\Models\LanguageList;
use App\Models\LanguageWithKeyword;
use App\Models\Screen;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLanuageKeyToLanuageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $languageListIds = LanguageList::pluck('id')->toArray();

        $fetchedKeywords = LanguageWithKeyword::whereIn('language_id', $languageListIds)
            ->pluck('keyword_id')
            ->toArray();

        $screen_data =
            [
                    [
                      "screenID"=> "1",
                      "ScreenName"=> "WalkThroughScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "1",
                          "keyword_id"=> 1,
                          "keyword_name"=> "skip",
                          "keyword_value"=> "Skip"
                        ],
                        [
                          "screenId"=> "1",
                          "keyword_id"=> 2,
                          "keyword_name"=> "getStarted",
                          "keyword_value"=> "Get started"
                        ],
                        [
                          "screenId"=> "1",
                          "keyword_id"=> 3,
                          "keyword_name"=> "walkThrough1Title",
                          "keyword_value"=> "Select pickup location"
                        ],
                        [
                          "screenId"=> "1",
                          "keyword_id"=> 4,
                          "keyword_name"=> "walkThrough2Title",
                          "keyword_value"=> "Select drop location"
                        ],
                        [
                          "screenId"=> "1",
                          "keyword_id"=> 5,
                          "keyword_name"=> "walkThrough3Title",
                          "keyword_value"=> "Confirm and relax"
                        ],
                        [
                          "screenId"=> "1",
                          "keyword_id"=> 6,
                          "keyword_name"=> "walkThrough1Subtitle",
                          "keyword_value"=> "It helps us to get package from your doorstep.."
                        ],
                        [
                          "screenId"=> "1",
                          "keyword_id"=> 7,
                          "keyword_name"=> "walkThrough2Subtitle",
                          "keyword_value"=> "So that we can deliver the package to the correct person quickly."
                        ],
                        [
                          "screenId"=> "1",
                          "keyword_id"=> 8,
                          "keyword_name"=> "walkThrough3Subtitle",
                          "keyword_value"=> "We will deliver your package on time and in perfect condition."
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "2",
                      "ScreenName"=> "SplashScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "2",
                          "keyword_id"=> 9,
                          "keyword_name"=> "appName",
                          "keyword_value"=> "Mighty Delivery"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "3",
                      "ScreenName"=> "LoginScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 10,
                          "keyword_name"=> "userNotApproveMsg",
                          "keyword_value"=> "You profile is under review. Wait some time or contact to your administrator."
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 11,
                          "keyword_name"=> "acceptTermService",
                          "keyword_value"=> "Please accept Terms of service & Privacy Policy."
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 12,
                          "keyword_name"=> "signIn",
                          "keyword_value"=> "Sign In"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 13,
                          "keyword_name"=> "email",
                          "keyword_value"=> "Email"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 14,
                          "keyword_name"=> "password",
                          "keyword_value"=> "Password"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 15,
                          "keyword_name"=> "rememberMe",
                          "keyword_value"=> "Remember me"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 16,
                          "keyword_name"=> "forgotPasswordQue",
                          "keyword_value"=> "Forgot password ?"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 17,
                          "keyword_name"=> "iAgreeToThe",
                          "keyword_value"=> "I agree to the"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 18,
                          "keyword_name"=> "termOfService",
                          "keyword_value"=> "Terms of service"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 19,
                          "keyword_name"=> "privacyPolicy",
                          "keyword_value"=> "Privacy policy"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 20,
                          "keyword_name"=> "demoUser",
                          "keyword_value"=> "Demo User"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 21,
                          "keyword_name"=> "demoDeliveryMan",
                          "keyword_value"=> "Demo Delivery Man"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 22,
                          "keyword_name"=> "doNotHaveAccount",
                          "keyword_value"=> "Don't have an account?"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 23,
                          "keyword_name"=> "signWith",
                          "keyword_value"=> "or Sign in with"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 24,
                          "keyword_name"=> "becomeADeliveryBoy",
                          "keyword_value"=> "Become a delivery boy ?"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 25,
                          "keyword_name"=> "signUp",
                          "keyword_value"=> "Sign Up"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 26,
                          "keyword_name"=> "lblUser",
                          "keyword_value"=> "User"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 27,
                          "keyword_name"=> "selectUserType",
                          "keyword_value"=> "Select user type"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 28,
                          "keyword_name"=> "lblDeliveryBoy",
                          "keyword_value"=> "Delivery boy"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 29,
                          "keyword_name"=> "cancel",
                          "keyword_value"=> "Cancel"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 30,
                          "keyword_name"=> "lblContinue",
                          "keyword_value"=> "Continue"
                        ],
                        [
                          "screenId"=> "3",
                          "keyword_id"=> 411,
                          "keyword_name"=> "forKey",
                          "keyword_value"=> "for"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "4",
                      "ScreenName"=> "ErrorMessages",
                      "keyword_data"=> [
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 31,
                          "keyword_name"=> "fieldRequiredMsg",
                          "keyword_value"=> "This field is required"
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 32,
                          "keyword_name"=> "emailInvalid",
                          "keyword_value"=> "Email is invalid"
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 33,
                          "keyword_name"=> "passwordInvalid",
                          "keyword_value"=> "Minimum password length should be 6"
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 74,
                          "keyword_name"=> "errorInternetNotAvailable",
                          "keyword_value"=> "Your internet is not working."
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 57,
                          "keyword_name"=> "errorSomethingWentWrong",
                          "keyword_value"=> "Something went wrong."
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 60,
                          "keyword_name"=> "credentialNotMatch",
                          "keyword_value"=> "These credential do not match our records."
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 279,
                          "keyword_name"=> "verificationCompleted",
                          "keyword_value"=> "Verification completed "
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 280,
                          "keyword_name"=> "phoneNumberInvalid",
                          "keyword_value"=> "The provided phone number is not valid. "
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 281,
                          "keyword_name"=> "codeSent",
                          "keyword_value"=> "Code sent "
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 282,
                          "keyword_name"=> "internetIsConnected",
                          "keyword_value"=> "Internet is connected."
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 283,
                          "keyword_name"=> "userNotFound",
                          "keyword_value"=> "User not found"
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 310,
                          "keyword_name"=> "allowLocationPermission",
                          "keyword_value"=> "allow location permission"
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 352,
                          "keyword_name"=> "invalidUrl",
                          "keyword_value"=> "Invalid url!.Please enter valid url"
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 355,
                          "keyword_name"=> "signInFailed",
                          "keyword_value"=> "Sign in failed:"
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 356,
                          "keyword_name"=> "appleSignInNotAvailableError",
                          "keyword_value"=> "Apple signIn is not available for your device"
                        ],
                        [
                          "screenId"=> "4",
                          "keyword_id"=> 263,
                          "keyword_name"=> "mapLoadingError",
                          "keyword_value"=> "Could not open the map."
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "5",
                      "ScreenName"=> "RegisterScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "5",
                          "keyword_id"=> 34,
                          "keyword_name"=> "name",
                          "keyword_value"=> "Name"
                        ],
                        [
                          "screenId"=> "5",
                          "keyword_id"=> 35,
                          "keyword_name"=> "contactNumber",
                          "keyword_value"=> "Contact number"
                        ],
                        [
                          "screenId"=> "5",
                          "keyword_id"=> 36,
                          "keyword_name"=> "alreadyHaveAnAccount",
                          "keyword_value"=> "Already have an account?"
                        ],
                        [
                          "screenId"=> "5",
                          "keyword_id"=> 258,
                          "keyword_name"=> "username",
                          "keyword_value"=> "Username"
                        ],
                        [
                          "screenId"=> "5",
                          "keyword_id"=> 503,
                          "keyword_name"=> "partnerCode",
                          "keyword_value"=> "Referral code"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "6",
                      "ScreenName"=> "ForgotPasswordScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "6",
                          "keyword_id"=> 37,
                          "keyword_name"=> "forgotPassword",
                          "keyword_value"=> "Forgot password"
                        ],
                        [
                          "screenId"=> "6",
                          "keyword_id"=> 38,
                          "keyword_name"=> "submit",
                          "keyword_value"=> "Submit"
                        ],
                        [
                          "screenId"=> "6",
                          "keyword_id"=> 39,
                          "keyword_name"=> "demoMsg",
                          "keyword_value"=> "Tester role not allowed to perform this action"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "7",
                      "ScreenName"=> "AboutUsScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "7",
                          "keyword_id"=> 40,
                          "keyword_name"=> "mAppDescription",
                          "keyword_value"=> "You can deliver exactly when the user wants and can start processing the user’s order almost immediately after you receive it, or you can deliver on a specific day and time."
                        ],
                        [
                          "screenId"=> "7",
                          "keyword_id"=> 41,
                          "keyword_name"=> "contactUs",
                          "keyword_value"=> "Contact us"
                        ],
                        [
                          "screenId"=> "7",
                          "keyword_id"=> 42,
                          "keyword_name"=> "aboutUs",
                          "keyword_value"=> "About us"
                        ],
                        [
                          "screenId"=> "7",
                          "keyword_id"=> 354,
                          "keyword_name"=> "copyRight",
                          "keyword_value"=> "© 2024 MeetMighty IT Solutions"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "8",
                      "ScreenName"=> "BankDetailScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "8",
                          "keyword_id"=> 43,
                          "keyword_name"=> "bankDetails",
                          "keyword_value"=> "Bank details"
                        ],
                        [
                          "screenId"=> "8",
                          "keyword_id"=> 44,
                          "keyword_name"=> "bankName",
                          "keyword_value"=> "Bank name"
                        ],
                        [
                          "screenId"=> "8",
                          "keyword_id"=> 45,
                          "keyword_name"=> "accountNumber",
                          "keyword_value"=> "Account number"
                        ],
                        [
                          "screenId"=> "8",
                          "keyword_id"=> 46,
                          "keyword_name"=> "nameAsPerBank",
                          "keyword_value"=> "Name as per bank"
                        ],
                        [
                          "screenId"=> "8",
                          "keyword_id"=> 47,
                          "keyword_name"=> "ifscCode",
                          "keyword_value"=> "IFSC code"
                        ],
                        [
                          "screenId"=> "8",
                          "keyword_id"=> 48,
                          "keyword_name"=> "save",
                          "keyword_value"=> "Save"
                        ],
                        [
                          "screenId"=> "8",
                          "keyword_id"=> 390,
                          "keyword_name"=> "bankAddress",
                          "keyword_value"=> "Bank address"
                        ],
                        [
                          "screenId"=> "8",
                          "keyword_id"=> 391,
                          "keyword_name"=> "routingNumber",
                          "keyword_value"=> "Routing number"
                        ],
                        [
                          "screenId"=> "8",
                          "keyword_id"=> 392,
                          "keyword_name"=> "bankIban",
                          "keyword_value"=> "Bank IBAN"
                        ],
                        [
                          "screenId"=> "8",
                          "keyword_id"=> 393,
                          "keyword_name"=> "bankSwift",
                          "keyword_value"=> "Bank swift"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "9",
                      "ScreenName"=> "ChangePasswordScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "9",
                          "keyword_id"=> 49,
                          "keyword_name"=> "changePassword",
                          "keyword_value"=> "Change password"
                        ],
                        [
                          "screenId"=> "9",
                          "keyword_id"=> 50,
                          "keyword_name"=> "oldPassword",
                          "keyword_value"=> "Current password"
                        ],
                        [
                          "screenId"=> "9",
                          "keyword_id"=> 51,
                          "keyword_name"=> "newPassword",
                          "keyword_value"=> "New password"
                        ],
                        [
                          "screenId"=> "9",
                          "keyword_id"=> 52,
                          "keyword_name"=> "confirmPassword",
                          "keyword_value"=> "Confirm password"
                        ],
                        [
                          "screenId"=> "9",
                          "keyword_id"=> 53,
                          "keyword_name"=> "passwordNotMatch",
                          "keyword_value"=> "Password does not match"
                        ],
                        [
                          "screenId"=> "9",
                          "keyword_id"=> 54,
                          "keyword_name"=> "saveChanges",
                          "keyword_value"=> "Save changes"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "10",
                      "ScreenName"=> "EditProfileScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "10",
                          "keyword_id"=> 55,
                          "keyword_name"=> "editProfile",
                          "keyword_value"=> "Edit profile"
                        ],
                        [
                          "screenId"=> "10",
                          "keyword_id"=> 56,
                          "keyword_name"=> "notChangeEmail",
                          "keyword_value"=> "You cannot change email id"
                        ],
                        [
                          "screenId"=> "10",
                          "keyword_id"=> 58,
                          "keyword_name"=> "notChangeMobileNo",
                          "keyword_value"=> "You cannot change contact number"
                        ],
                        [
                          "screenId"=> "10",
                          "keyword_id"=> 59,
                          "keyword_name"=> "address",
                          "keyword_value"=> "Address"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "11",
                      "ScreenName"=> "EmailVerificationScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "11",
                          "keyword_id"=> 61,
                          "keyword_name"=> "logoutConfirmationMsg",
                          "keyword_value"=> "Are you sure you want to logout ?"
                        ],
                        [
                          "screenId"=> "11",
                          "keyword_id"=> 62,
                          "keyword_name"=> "yes",
                          "keyword_value"=> "Yes"
                        ],
                        [
                          "screenId"=> "11",
                          "keyword_id"=> 63,
                          "keyword_name"=> "no",
                          "keyword_value"=> "No"
                        ],
                        [
                          "screenId"=> "11",
                          "keyword_id"=> 64,
                          "keyword_name"=> "emailVerification",
                          "keyword_value"=> "Email verification"
                        ],
                        [
                          "screenId"=> "11",
                          "keyword_id"=> 65,
                          "keyword_name"=> "weSend",
                          "keyword_value"=> "We will send you an"
                        ],
                        [
                          "screenId"=> "11",
                          "keyword_id"=> 66,
                          "keyword_name"=> "oneTimePassword",
                          "keyword_value"=> "One Time Password"
                        ],
                        [
                          "screenId"=> "11",
                          "keyword_id"=> 67,
                          "keyword_name"=> "on",
                          "keyword_value"=> "on"
                        ],
                        [
                          "screenId"=> "11",
                          "keyword_id"=> 68,
                          "keyword_name"=> "getEmail",
                          "keyword_value"=> "Get email"
                        ],
                        [
                          "screenId"=> "11",
                          "keyword_id"=> 69,
                          "keyword_name"=> "confirmationCode",
                          "keyword_value"=> "Enter confirmation code"
                        ],
                        [
                          "screenId"=> "11",
                          "keyword_id"=> 70,
                          "keyword_name"=> "confirmationCodeSent",
                          "keyword_value"=> "Enter the confirmation code have sent to"
                        ],
                        [
                          "screenId"=> "11",
                          "keyword_id"=> 71,
                          "keyword_name"=> "didNotReceiveTheCode",
                          "keyword_value"=> "Didn't receive the code?"
                        ],
                        [
                          "screenId"=> "11",
                          "keyword_id"=> 72,
                          "keyword_name"=> "resend",
                          "keyword_value"=> "RESEND"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "12",
                      "ScreenName"=> "LanguageScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "12",
                          "keyword_id"=> 73,
                          "keyword_name"=> "language",
                          "keyword_value"=> "Language"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "13",
                      "ScreenName"=> "NotificationScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "13",
                          "keyword_id"=> 75,
                          "keyword_name"=> "notifications",
                          "keyword_value"=> "Notifications"
                        ],
                        [
                          "screenId"=> "13",
                          "keyword_id"=> 76,
                          "keyword_name"=> "markAllRead",
                          "keyword_value"=> "Mark all as read"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "14",
                      "ScreenName"=> "ThemeScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "14",
                          "keyword_id"=> 77,
                          "keyword_name"=> "light",
                          "keyword_value"=> "Light"
                        ],
                        [
                          "screenId"=> "14",
                          "keyword_id"=> 78,
                          "keyword_name"=> "dark",
                          "keyword_value"=> "Dark"
                        ],
                        [
                          "screenId"=> "14",
                          "keyword_id"=> 79,
                          "keyword_name"=> "systemDefault",
                          "keyword_value"=> "System default"
                        ],
                        [
                          "screenId"=> "14",
                          "keyword_id"=> 80,
                          "keyword_name"=> "theme",
                          "keyword_value"=> "Theme"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "15",
                      "ScreenName"=> "UserCitySelectScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "15",
                          "keyword_id"=> 81,
                          "keyword_name"=> "pleaseSelectCity",
                          "keyword_value"=> "Please select city"
                        ],
                        [
                          "screenId"=> "15",
                          "keyword_id"=> 82,
                          "keyword_name"=> "selectRegion",
                          "keyword_value"=> "Select region"
                        ],
                        [
                          "screenId"=> "15",
                          "keyword_id"=> 83,
                          "keyword_name"=> "country",
                          "keyword_value"=> "Country"
                        ],
                        [
                          "screenId"=> "15",
                          "keyword_id"=> 84,
                          "keyword_name"=> "city",
                          "keyword_value"=> "City"
                        ],
                        [
                          "screenId"=> "15",
                          "keyword_id"=> 85,
                          "keyword_name"=> "selectCity",
                          "keyword_value"=> "Select city"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "16",
                      "ScreenName"=> "VerificationScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "16",
                          "keyword_id"=> 86,
                          "keyword_name"=> "verification",
                          "keyword_value"=> "Verification"
                        ],
                        [
                          "screenId"=> "16",
                          "keyword_id"=> 87,
                          "keyword_name"=> "phoneNumberVerification",
                          "keyword_value"=> "Phone number verification"
                        ],
                        [
                          "screenId"=> "16",
                          "keyword_id"=> 88,
                          "keyword_name"=> "getOTP",
                          "keyword_value"=> "Get OTP"
                        ],
                        [
                          "screenId"=> "16",
                          "keyword_id"=> 89,
                          "keyword_name"=> "invalidVerificationCode",
                          "keyword_value"=> "Invalid verification code"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "17",
                      "ScreenName"=> "ChatScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "17",
                          "keyword_id"=> 90,
                          "keyword_name"=> "deleteMessage",
                          "keyword_value"=> "Delete message?"
                        ],
                        [
                          "screenId"=> "17",
                          "keyword_id"=> 91,
                          "keyword_name"=> "writeAMessage",
                          "keyword_value"=> "Write a message..."
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "18",
                      "ScreenName"=> "AddAddressScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "18",
                          "keyword_id"=> 92,
                          "keyword_name"=> "addNewAddress",
                          "keyword_value"=> "Add new address"
                        ],
                        [
                          "screenId"=> "18",
                          "keyword_id"=> 93,
                          "keyword_name"=> "pleaseSelectValidAddress",
                          "keyword_value"=> "Please select valid address"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "19",
                      "ScreenName"=> "CreateOrderScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 94,
                          "keyword_name"=> "balanceInsufficient",
                          "keyword_value"=> "Balance is insufficient,Please add amount in your wallet"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 95,
                          "keyword_name"=> "deliveryNow",
                          "keyword_value"=> "Deliver now"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 96,
                          "keyword_name"=> "schedule",
                          "keyword_value"=> "Schedule"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 97,
                          "keyword_name"=> "pickTime",
                          "keyword_value"=> "Pick time"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 98,
                          "keyword_name"=> "date",
                          "keyword_value"=> "Date"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 99,
                          "keyword_name"=> "from",
                          "keyword_value"=> "From"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 100,
                          "keyword_name"=> "endTimeValidationMsg",
                          "keyword_value"=> "EndTime must be after StartTime"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 101,
                          "keyword_name"=> "to",
                          "keyword_value"=> "To"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 102,
                          "keyword_name"=> "deliverTime",
                          "keyword_value"=> "Deliver time"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 103,
                          "keyword_name"=> "weight",
                          "keyword_value"=> "Weight"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 104,
                          "keyword_name"=> "numberOfParcels",
                          "keyword_value"=> "Number of parcels"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 105,
                          "keyword_name"=> "selectVehicle",
                          "keyword_value"=> "Select vehicle"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 106,
                          "keyword_name"=> "parcelType",
                          "keyword_value"=> "Parcel type"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 107,
                          "keyword_name"=> "pickupInformation",
                          "keyword_value"=> "Pickup information"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 108,
                          "keyword_name"=> "selectAddressSave",
                          "keyword_value"=> "Select address from save"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 109,
                          "keyword_name"=> "selectAddress",
                          "keyword_value"=> "Select address"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 110,
                          "keyword_name"=> "location",
                          "keyword_value"=> "Location"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 111,
                          "keyword_name"=> "description",
                          "keyword_value"=> "Description"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 112,
                          "keyword_name"=> "deliveryInformation",
                          "keyword_value"=> "Delivery information"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 113,
                          "keyword_name"=> "deliveryLocation",
                          "keyword_value"=> "Delivery location"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 114,
                          "keyword_name"=> "deliveryContactNumber",
                          "keyword_value"=> "Delivery contact number"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 115,
                          "keyword_name"=> "deliveryDescription",
                          "keyword_value"=> "Delivery description"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 116,
                          "keyword_name"=> "packageInformation",
                          "keyword_value"=> "Package information"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 118,
                          "keyword_name"=> "pickupLocation",
                          "keyword_value"=> "Pickup location"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 120,
                          "keyword_name"=> "payment",
                          "keyword_value"=> "Payment"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 121,
                          "keyword_name"=> "paymentCollectFrom",
                          "keyword_value"=> "Payment collect from"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 122,
                          "keyword_name"=> "saveDraftConfirmationMsg",
                          "keyword_value"=> "Are you sure you want to save as a draft?"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 123,
                          "keyword_name"=> "saveDraft",
                          "keyword_value"=> "Save draft"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 124,
                          "keyword_name"=> "createOrder",
                          "keyword_value"=> "Place order"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 125,
                          "keyword_name"=> "previous",
                          "keyword_value"=> "Previous"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 126,
                          "keyword_name"=> "next",
                          "keyword_value"=> "Next"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 127,
                          "keyword_name"=> "sourceLocation",
                          "keyword_value"=> "Source location"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 128,
                          "keyword_name"=> "destinationLocation",
                          "keyword_value"=> "Destination location"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 129,
                          "keyword_name"=> "pickupCurrentValidationMsg",
                          "keyword_value"=> "Pickup time must be after current time"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 130,
                          "keyword_name"=> "pickupDeliverValidationMsg",
                          "keyword_value"=> "Pickup time must be before deliver time"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 131,
                          "keyword_name"=> "createOrderConfirmationMsg",
                          "keyword_value"=> "Are you sure you want to place order?"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 132,
                          "keyword_name"=> "deliveryCharge",
                          "keyword_value"=> "Delivery charge"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 133,
                          "keyword_name"=> "distanceCharge",
                          "keyword_value"=> "Distance charge"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 134,
                          "keyword_name"=> "weightCharge",
                          "keyword_value"=> "Weight charge"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 135,
                          "keyword_name"=> "extraCharges",
                          "keyword_value"=> "Extra charges"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 136,
                          "keyword_name"=> "total",
                          "keyword_value"=> "Total"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 137,
                          "keyword_name"=> "choosePickupAddress",
                          "keyword_value"=> "Choose pickup address"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 138,
                          "keyword_name"=> "chooseDeliveryAddress",
                          "keyword_value"=> "Choose delivery address"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 139,
                          "keyword_name"=> "showingAllAddress",
                          "keyword_value"=> "Showing all available addresses"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 284,
                          "keyword_name"=> "confirmation",
                          "keyword_value"=> "Confirmation "
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 285,
                          "keyword_name"=> "create",
                          "keyword_value"=> "Create"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 302,
                          "keyword_name"=> "cash",
                          "keyword_value"=> "Cash"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 303,
                          "keyword_name"=> "online",
                          "keyword_value"=> "Online"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 340,
                          "keyword_name"=> "balanceInsufficientCashPayment",
                          "keyword_value"=> "Balance is insufficient,Order is created with cash payment."
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 341,
                          "keyword_name"=> "ok",
                          "keyword_value"=> "OK"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 367,
                          "keyword_name"=> "orderItems",
                          "keyword_value"=> "Order items"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 368,
                          "keyword_name"=> "productAmount",
                          "keyword_value"=> "Product amount"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 375,
                          "keyword_name"=> "pleaseAvoidSendingProhibitedItems",
                          "keyword_value"=> "Note: Please avoid sending prohibited items."
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 434,
                          "keyword_name"=> "insuranceCharge",
                          "keyword_value"=> "Insurance charge"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 456,
                          "keyword_name"=> "labels",
                          "keyword_value"=> "Labels"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 457,
                          "keyword_name"=> "pickupPersonName",
                          "keyword_value"=> "Pickup person contact name"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 458,
                          "keyword_name"=> "pickupInstructions",
                          "keyword_value"=> "Pickup instructions"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 459,
                          "keyword_name"=> "deliveryPersonName",
                          "keyword_value"=> "Delivery person contact name"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 460,
                          "keyword_name"=> "deliveryInstructions",
                          "keyword_value"=> "Delivery instructions"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 461,
                          "keyword_name"=> "insurance",
                          "keyword_value"=> "Insurance"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 462,
                          "keyword_name"=> "addCourierInsurance",
                          "keyword_value"=> "Add Courier Insurance"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 463,
                          "keyword_name"=> "noThanksRisk",
                          "keyword_value"=> "No thanks, I'll risk it"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 505,
                          "keyword_name"=> "approxParcelValue",
                          "keyword_value"=> "Enter approx parcel value"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 506,
                          "keyword_name"=> "reviewRoute",
                          "keyword_value"=> "Review route"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 507,
                          "keyword_name"=> "pickupDescription",
                          "keyword_value"=> "Pickup description"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 508,
                          "keyword_name"=> "viewMore",
                          "keyword_value"=> "View More"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 509,
                          "keyword_name"=> "contactPersonName",
                          "keyword_value"=> "Contact person name"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 510,
                          "keyword_name"=> "information",
                          "keyword_value"=> "Information"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 511,
                          "keyword_name"=> "instruction",
                          "keyword_value"=> "Instruction"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 516,
                          "keyword_name"=> "insuranceAmountValidation",
                          "keyword_value"=> "please enter insurance amount"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 542,
                          "keyword_name"=> "timeValidation",
                          "keyword_value"=> "Time must be at least 1 hour after the current time."
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 547,
                          "keyword_name"=> "scheduleOrderTimeMsg",
                          "keyword_value"=> "Time must be at least 1 hour after the current time."
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 558,
                          "keyword_name"=> "capacity",
                          "keyword_value"=> "Capacity"
                        ],
                        [
                          "screenId"=> "19",
                          "keyword_id"=> 559,
                          "keyword_name"=> "perKmCharge:",
                          "keyword_value"=> "Per km charge:"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "20",
                      "ScreenName"=> "DashboardScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "20",
                          "keyword_id"=> 140,
                          "keyword_name"=> "myOrders",
                          "keyword_value"=> "My orders"
                        ],
                        [
                          "screenId"=> "20",
                          "keyword_id"=> 141,
                          "keyword_name"=> "account",
                          "keyword_value"=> "Account"
                        ],
                        [
                          "screenId"=> "20",
                          "keyword_id"=> 142,
                          "keyword_name"=> "hey",
                          "keyword_value"=> "Hey"
                        ],
                        [
                          "screenId"=> "20",
                          "keyword_id"=> 286,
                          "keyword_name"=> "filter",
                          "keyword_value"=> "Filter "
                        ],
                        [
                          "screenId"=> "20",
                          "keyword_id"=> 287,
                          "keyword_name"=> "reset",
                          "keyword_value"=> "Reset "
                        ],
                        [
                          "screenId"=> "20",
                          "keyword_id"=> 288,
                          "keyword_name"=> "status",
                          "keyword_value"=> "Status "
                        ],
                        [
                          "screenId"=> "20",
                          "keyword_id"=> 289,
                          "keyword_name"=> "mustSelectStartDate",
                          "keyword_value"=> "must select start date "
                        ],
                        [
                          "screenId"=> "20",
                          "keyword_id"=> 290,
                          "keyword_name"=> "toDateValidationMsg",
                          "keyword_value"=> "To date must be after from date "
                        ],
                        [
                          "screenId"=> "20",
                          "keyword_id"=> 291,
                          "keyword_name"=> "applyFilter",
                          "keyword_value"=> "Apply filter"
                        ],
                        [
                          "screenId"=> "20",
                          "keyword_id"=> 376,
                          "keyword_name"=> "whatCanWeGetYou",
                          "keyword_value"=> "What can we get you?"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "21",
                      "ScreenName"=> "AccountFragment",
                      "keyword_data"=> [
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 143,
                          "keyword_name"=> "ordersWalletMore",
                          "keyword_value"=> "Orders, wallet and more"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 144,
                          "keyword_name"=> "drafts",
                          "keyword_value"=> "Drafts"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 145,
                          "keyword_name"=> "wallet",
                          "keyword_value"=> "Wallet"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 146,
                          "keyword_name"=> "lblMyAddresses",
                          "keyword_value"=> "My addresses"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 147,
                          "keyword_name"=> "deleteAccount",
                          "keyword_value"=> "Delete account"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 148,
                          "keyword_name"=> "general",
                          "keyword_value"=> "General"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 149,
                          "keyword_name"=> "termAndCondition",
                          "keyword_value"=> "Terms & Condition"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 150,
                          "keyword_name"=> "helpAndSupport",
                          "keyword_value"=> "Help & Support"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 151,
                          "keyword_name"=> "logout",
                          "keyword_value"=> "Logout"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 152,
                          "keyword_name"=> "version",
                          "keyword_value"=> "Version"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 119,
                          "keyword_name"=> "verifyDocument",
                          "keyword_value"=> "Verify document"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 408,
                          "keyword_name"=> "pages",
                          "keyword_value"=> "PAGES"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 517,
                          "keyword_name"=> "vehicleHistory",
                          "keyword_value"=> "Vehicle history"
                        ],
                        [
                          "screenId"=> "21",
                          "keyword_id"=> 518,
                          "keyword_name"=> "update",
                          "keyword_value"=> "update"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "22",
                      "ScreenName"=> "DeleteAccountScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "22",
                          "keyword_id"=> 153,
                          "keyword_name"=> "confirmAccountDeletion",
                          "keyword_value"=> "Confirm account deletion"
                        ],
                        [
                          "screenId"=> "22",
                          "keyword_id"=> 154,
                          "keyword_name"=> "deleteAccountMsg2",
                          "keyword_value"=> "Deleting your account removes personal information from our database. Your email becomes permanently reserved and same email cannot be re-used to register a new account."
                        ],
                        [
                          "screenId"=> "22",
                          "keyword_id"=> 155,
                          "keyword_name"=> "deleteAccountConfirmMsg",
                          "keyword_value"=> "Are you sure you want to delete account?"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "23",
                      "ScreenName"=> "DraftOrderListScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "23",
                          "keyword_id"=> 156,
                          "keyword_name"=> "draftOrder",
                          "keyword_value"=> "Draft order"
                        ],
                        [
                          "screenId"=> "23",
                          "keyword_id"=> 157,
                          "keyword_name"=> "delete",
                          "keyword_value"=> "Delete"
                        ],
                        [
                          "screenId"=> "23",
                          "keyword_id"=> 158,
                          "keyword_name"=> "deleteDraft",
                          "keyword_value"=> "Delete draft order?"
                        ],
                        [
                          "screenId"=> "23",
                          "keyword_id"=> 159,
                          "keyword_name"=> "sureWantToDeleteDraft",
                          "keyword_value"=> "Are you sure want to delete this draft order?"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "24",
                      "ScreenName"=> "GoogleMapScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "24",
                          "keyword_id"=> 160,
                          "keyword_name"=> "selectLocation",
                          "keyword_value"=> "Select location"
                        ],
                        [
                          "screenId"=> "24",
                          "keyword_id"=> 161,
                          "keyword_name"=> "selectPickupLocation",
                          "keyword_value"=> "Select pickup location"
                        ],
                        [
                          "screenId"=> "24",
                          "keyword_id"=> 162,
                          "keyword_name"=> "selectDeliveryLocation",
                          "keyword_value"=> "Select delivery location"
                        ],
                        [
                          "screenId"=> "24",
                          "keyword_id"=> 163,
                          "keyword_name"=> "searchAddress",
                          "keyword_value"=> "Search address"
                        ],
                        [
                          "screenId"=> "24",
                          "keyword_id"=> 164,
                          "keyword_name"=> "pleaseWait",
                          "keyword_value"=> "Please wait..."
                        ],
                        [
                          "screenId"=> "24",
                          "keyword_id"=> 165,
                          "keyword_name"=> "confirmPickupLocation",
                          "keyword_value"=> "Confirm pickup location"
                        ],
                        [
                          "screenId"=> "24",
                          "keyword_id"=> 166,
                          "keyword_name"=> "confirmDeliveryLocation",
                          "keyword_value"=> "Confirm delivery location"
                        ],
                        [
                          "screenId"=> "24",
                          "keyword_id"=> 167,
                          "keyword_name"=> "addressNotInArea",
                          "keyword_value"=> "Address not in area"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "25",
                      "ScreenName"=> "MyAddressListScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "25",
                          "keyword_id"=> 168,
                          "keyword_name"=> "deleteLocation",
                          "keyword_value"=> "Delete location?"
                        ],
                        [
                          "screenId"=> "25",
                          "keyword_id"=> 169,
                          "keyword_name"=> "sureWantToDeleteAddress",
                          "keyword_value"=> "Are you sure want to delete this address?"
                        ],
                        [
                          "screenId"=> "25",
                          "keyword_id"=> 464,
                          "keyword_name"=> "addressType",
                          "keyword_value"=> "Address type"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "27",
                      "ScreenName"=> "OrderDetailScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 170,
                          "keyword_name"=> "at",
                          "keyword_value"=> "At"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 171,
                          "keyword_name"=> "distance",
                          "keyword_value"=> "Distance"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 172,
                          "keyword_name"=> "duration",
                          "keyword_value"=> "Duration"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 173,
                          "keyword_name"=> "picked",
                          "keyword_value"=> "Picked"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 174,
                          "keyword_name"=> "note",
                          "keyword_value"=> "Note:"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 175,
                          "keyword_name"=> "courierWillPickupAt",
                          "keyword_value"=> "Courier will pickup at"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 176,
                          "keyword_name"=> "delivered",
                          "keyword_value"=> "Delivered"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 177,
                          "keyword_name"=> "courierWillDeliverAt",
                          "keyword_value"=> "Courier will deliver at"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 178,
                          "keyword_name"=> "viewHistory",
                          "keyword_value"=> "View history"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 179,
                          "keyword_name"=> "parcelDetails",
                          "keyword_value"=> "Parcel details"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 180,
                          "keyword_name"=> "paymentDetails",
                          "keyword_value"=> "Payment details"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 181,
                          "keyword_name"=> "paymentType",
                          "keyword_value"=> "Payment type"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 182,
                          "keyword_name"=> "paymentStatus",
                          "keyword_value"=> "Payment status"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 183,
                          "keyword_name"=> "vehicle",
                          "keyword_value"=> "Vehicle"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 184,
                          "keyword_name"=> "vehicleName",
                          "keyword_value"=> "Vehicle name"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 185,
                          "keyword_name"=> "aboutDeliveryMan",
                          "keyword_value"=> "About delivery man"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 186,
                          "keyword_name"=> "aboutUser",
                          "keyword_value"=> "About user"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 187,
                          "keyword_name"=> "returnReason",
                          "keyword_value"=> "Return reason"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 188,
                          "keyword_name"=> "cancelledReason",
                          "keyword_value"=> "Cancelled reason"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 189,
                          "keyword_name"=> "cancelBeforePickMsg",
                          "keyword_value"=> "The order was cancelled before pickup the parcel.So,only cancellation charge is cut.If payment is already done then amount is refund to wallet."
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 190,
                          "keyword_name"=> "cancelAfterPickMsg",
                          "keyword_value"=> "The order was cancelled after pickup the parcel.So,fully charge is cut."
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 191,
                          "keyword_name"=> "cancelOrder",
                          "keyword_value"=> "Cancel order"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 192,
                          "keyword_name"=> "cancelNote",
                          "keyword_value"=> "NOTE: If you cancel the order before pickup the parcel then cancellation charge will be cut. Otherwise, full charge will be cut."
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 193,
                          "keyword_name"=> "returnOrder",
                          "keyword_value"=> "Return order"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 317,
                          "keyword_name"=> "onPickup",
                          "keyword_value"=> "On pickup"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 318,
                          "keyword_name"=> "onDelivery",
                          "keyword_value"=> "On delivery"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 319,
                          "keyword_name"=> "stripe",
                          "keyword_value"=> "Stripe "
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 320,
                          "keyword_name"=> "razorpay",
                          "keyword_value"=> "Razorpay "
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 321,
                          "keyword_name"=> "payStack",
                          "keyword_value"=> "PayStack "
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 322,
                          "keyword_name"=> "flutterWave",
                          "keyword_value"=> "FlutterWave"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 323,
                          "keyword_name"=> "paypal",
                          "keyword_value"=> "PayPal"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 324,
                          "keyword_name"=> "payTabs",
                          "keyword_value"=> "PayTabs "
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 325,
                          "keyword_name"=> "mercadoPago",
                          "keyword_value"=> "Mercado pago "
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 326,
                          "keyword_name"=> "paytm",
                          "keyword_value"=> "Paytm "
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 327,
                          "keyword_name"=> "myFatoorah",
                          "keyword_value"=> "My Fatoorah"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 372,
                          "keyword_name"=> "rateStore",
                          "keyword_value"=> "Rate store "
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 373,
                          "keyword_name"=> "rateToStore",
                          "keyword_value"=> "Rate to store :"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 374,
                          "keyword_name"=> "yourRatingToStore",
                          "keyword_value"=> "Your rating to store :"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 406,
                          "keyword_name"=> "addReview",
                          "keyword_value"=> "Add review"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 407,
                          "keyword_name"=> "yourExperience",
                          "keyword_value"=> "How was your delivery experience with us"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 448,
                          "keyword_name"=> "invalidPickupAddress",
                          "keyword_value"=> "Invalid pickup address"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 449,
                          "keyword_name"=> "refusedBySender",
                          "keyword_value"=> "Refused by sender"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 450,
                          "keyword_name"=> "invalidDeliveryAddress",
                          "keyword_value"=> "Invalid delivery address"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 451,
                          "keyword_name"=> "exception",
                          "keyword_value"=> "Exception"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 452,
                          "keyword_name"=> "refusedByRecipient",
                          "keyword_value"=> "Refused by recipient"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 465,
                          "keyword_name"=> "shippedVia",
                          "keyword_value"=> "Shipped via"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 466,
                          "keyword_name"=> "pleaseSelectReason",
                          "keyword_value"=> "please select reason"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 467,
                          "keyword_name"=> "cancelAndReturn",
                          "keyword_value"=> "Cancel & return"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 549,
                          "keyword_name"=> "canOrderWithinHour",
                          "keyword_value"=> "You can cancel your order before => "
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 560,
                          "keyword_name"=> "enterProofDetails",
                          "keyword_value"=> "Enter proof details"
                        ],
                        [
                          "screenId"=> "27",
                          "keyword_id"=> 566,
                          "keyword_name"=> "rescheduleMsg",
                          "keyword_value"=> "Your order is rescheduled at"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "26",
                      "ScreenName"=> "OrderHistoryScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "26",
                          "keyword_id"=> 194,
                          "keyword_name"=> "orderHistory",
                          "keyword_value"=> "Order history"
                        ],
                        [
                          "screenId"=> "26",
                          "keyword_id"=> 195,
                          "keyword_name"=> "yourOrder",
                          "keyword_value"=> "Your order"
                        ],
                        [
                          "screenId"=> "26",
                          "keyword_id"=> 196,
                          "keyword_name"=> "hasBeenAssignedTo",
                          "keyword_value"=> "has been assigned to"
                        ],
                        [
                          "screenId"=> "26",
                          "keyword_id"=> 197,
                          "keyword_name"=> "hasBeenTransferedTo",
                          "keyword_value"=> "has been transferred to"
                        ],
                        [
                          "screenId"=> "26",
                          "keyword_id"=> 198,
                          "keyword_name"=> "newOrderHasBeenCreated",
                          "keyword_value"=> "New order has been created."
                        ],
                        [
                          "screenId"=> "26",
                          "keyword_id"=> 199,
                          "keyword_name"=> "deliveryPersonArrivedMsg",
                          "keyword_value"=> "Delivery person has been arrived at pick up location and waiting for client."
                        ],
                        [
                          "screenId"=> "26",
                          "keyword_id"=> 200,
                          "keyword_name"=> "deliveryPersonPickedUpCourierMsg",
                          "keyword_value"=> "Delivery person have picked up courier from pickup location."
                        ],
                        [
                          "screenId"=> "26",
                          "keyword_id"=> 201,
                          "keyword_name"=> "hasBeenOutForDelivery",
                          "keyword_value"=> "has been out for delivery."
                        ],
                        [
                          "screenId"=> "26",
                          "keyword_id"=> 202,
                          "keyword_name"=> "paymentStatusPaisMsg",
                          "keyword_value"=> "payment status is paid."
                        ],
                        [
                          "screenId"=> "26",
                          "keyword_id"=> 203,
                          "keyword_name"=> "deliveredMsg",
                          "keyword_value"=> "has been successfully delivered."
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "28",
                      "ScreenName"=> "OrderTrackingScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "28",
                          "keyword_id"=> 204,
                          "keyword_name"=> "lastUpdatedAt",
                          "keyword_value"=> "Last update at "
                        ],
                        [
                          "screenId"=> "28",
                          "keyword_id"=> 205,
                          "keyword_name"=> "trackOrder",
                          "keyword_value"=> "Track order"
                        ],
                        [
                          "screenId"=> "28",
                          "keyword_id"=> 304,
                          "keyword_name"=> "track",
                          "keyword_value"=> "Track"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "29",
                      "ScreenName"=> "PaymentScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "29",
                          "keyword_id"=> 206,
                          "keyword_name"=> "transactionFailed",
                          "keyword_value"=> "Transaction failed!! Try again."
                        ],
                        [
                          "screenId"=> "29",
                          "keyword_id"=> 207,
                          "keyword_name"=> "success",
                          "keyword_value"=> "Success"
                        ],
                        [
                          "screenId"=> "29",
                          "keyword_id"=> 208,
                          "keyword_name"=> "failed",
                          "keyword_value"=> "Failed"
                        ],
                        [
                          "screenId"=> "29",
                          "keyword_id"=> 209,
                          "keyword_name"=> "paymentMethod",
                          "keyword_value"=> "Payment methods"
                        ],
                        [
                          "screenId"=> "29",
                          "keyword_id"=> 210,
                          "keyword_name"=> "payNow",
                          "keyword_value"=> "Pay now"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "30",
                      "ScreenName"=> "ReturnOrderScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "30",
                          "keyword_id"=> 211,
                          "keyword_name"=> "other",
                          "keyword_value"=> "Other"
                        ],
                        [
                          "screenId"=> "30",
                          "keyword_id"=> 212,
                          "keyword_name"=> "reason",
                          "keyword_value"=> "Reason"
                        ],
                        [
                          "screenId"=> "30",
                          "keyword_id"=> 213,
                          "keyword_name"=> "writeReasonHere",
                          "keyword_value"=> "Write reason here..."
                        ],
                        [
                          "screenId"=> "30",
                          "keyword_id"=> 214,
                          "keyword_name"=> "lblReturn",
                          "keyword_value"=> "Return"
                        ],
                        [
                          "screenId"=> "30",
                          "keyword_id"=> 476,
                          "keyword_name"=> "process",
                          "keyword_value"=> "Process"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "31",
                      "ScreenName"=> "UserDetailsScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "31",
                          "keyword_id"=> 215,
                          "keyword_name"=> "profile",
                          "keyword_value"=> "Profile"
                        ],
                        [
                          "screenId"=> "31",
                          "keyword_id"=> 216,
                          "keyword_name"=> "earningHistory",
                          "keyword_value"=> "Earning history"
                        ],
                        [
                          "screenId"=> "31",
                          "keyword_id"=> 217,
                          "keyword_name"=> "availableBalance",
                          "keyword_value"=> "Available balance"
                        ],
                        [
                          "screenId"=> "31",
                          "keyword_id"=> 218,
                          "keyword_name"=> "manualRecieved",
                          "keyword_value"=> "Manual received"
                        ],
                        [
                          "screenId"=> "31",
                          "keyword_id"=> 219,
                          "keyword_name"=> "totalWithdrawn",
                          "keyword_value"=> "Total withdraw amount"
                        ],
                        [
                          "screenId"=> "31",
                          "keyword_id"=> 220,
                          "keyword_name"=> "lastLocation",
                          "keyword_value"=> "Last location"
                        ],
                        [
                          "screenId"=> "31",
                          "keyword_id"=> 221,
                          "keyword_name"=> "latitude",
                          "keyword_value"=> "Latitude"
                        ],
                        [
                          "screenId"=> "31",
                          "keyword_id"=> 222,
                          "keyword_name"=> "longitude",
                          "keyword_value"=> "Longitude"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "32",
                      "ScreenName"=> "WalletScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 223,
                          "keyword_name"=> "walletHistory",
                          "keyword_value"=> "Wallet history"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 224,
                          "keyword_name"=> "addMoney",
                          "keyword_value"=> "Add money"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 225,
                          "keyword_name"=> "amount",
                          "keyword_value"=> "Amount"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 226,
                          "keyword_name"=> "add",
                          "keyword_value"=> "Add"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 227,
                          "keyword_name"=> "addAmount",
                          "keyword_value"=> "Amount field is empty.Please add amount"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 228,
                          "keyword_name"=> "withdraw",
                          "keyword_value"=> "Withdraw"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 405,
                          "keyword_name"=> "request",
                          "keyword_value"=> "Request"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 229,
                          "keyword_name"=> "bankNotFound",
                          "keyword_value"=> "Opps,your bank detail not found"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 342,
                          "keyword_name"=> "orderFee",
                          "keyword_value"=> "Order fee"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 343,
                          "keyword_name"=> "topup",
                          "keyword_value"=> "Topup"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 344,
                          "keyword_name"=> "orderCancelCharge",
                          "keyword_value"=> "Order cancel charge"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 345,
                          "keyword_name"=> "orderCancelRefund",
                          "keyword_value"=> "Order cancel refund"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 346,
                          "keyword_name"=> "correction",
                          "keyword_value"=> "Correction"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 347,
                          "keyword_name"=> "commission",
                          "keyword_value"=> "Total earning"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 477,
                          "keyword_name"=> "copy",
                          "keyword_value"=> "copy"
                        ],
                        [
                          "screenId"=> "32",
                          "keyword_id"=> 478,
                          "keyword_name"=> "copiedToClipboard",
                          "keyword_value"=> "copied to clipboard"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "33",
                      "ScreenName"=> "DeliveryDashbord",
                      "keyword_data"=> [
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 230,
                          "keyword_name"=> "order",
                          "keyword_value"=> "Order"
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 231,
                          "keyword_name"=> "orderCancelConfirmation",
                          "keyword_value"=> "Are you sure you want to cancel this order? "
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 232,
                          "keyword_name"=> "notifyUser",
                          "keyword_value"=> "Notify user "
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 233,
                          "keyword_name"=> "areYouSureWantToArrive",
                          "keyword_value"=> "Are you sure you want to arrive? "
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 234,
                          "keyword_name"=> "orderArrived",
                          "keyword_value"=> "Order arrived "
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 235,
                          "keyword_name"=> "orderActiveSuccessfully",
                          "keyword_value"=> "Congrats!!Order activated successfully. "
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 236,
                          "keyword_name"=> "orderDepartedSuccessfully",
                          "keyword_value"=> "Congrats!!Order has been departed successfully. "
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 237,
                          "keyword_name"=> "accept",
                          "keyword_value"=> "Accept "
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 238,
                          "keyword_name"=> "pickUp",
                          "keyword_value"=> "Pickup "
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 239,
                          "keyword_name"=> "departed",
                          "keyword_value"=> "Departed "
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 240,
                          "keyword_name"=> "confirmDelivery",
                          "keyword_value"=> "Confirm delivery"
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 311,
                          "keyword_name"=> "orderPickupConfirmation",
                          "keyword_value"=> "Are you sure you want to pick up this order?"
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 312,
                          "keyword_name"=> "orderDepartedConfirmation",
                          "keyword_value"=> "Are you sure you want to departed this order?"
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 313,
                          "keyword_name"=> "orderCreateConfirmation",
                          "keyword_value"=> "Are you sure you want to create this order?"
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 314,
                          "keyword_name"=> "orderCompleteConfirmation",
                          "keyword_value"=> "Are you sure you want to complete this order?"
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 348,
                          "keyword_name"=> "assigned",
                          "keyword_value"=> "Assigned "
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 349,
                          "keyword_name"=> "draft",
                          "keyword_value"=> "Draft "
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 350,
                          "keyword_name"=> "created",
                          "keyword_value"=> "Created "
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 351,
                          "keyword_name"=> "accepted",
                          "keyword_value"=> "Accepted"
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 353,
                          "keyword_name"=> "orderAssignConfirmation",
                          "keyword_value"=> "Are you sure you want to accept this order?"
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 410,
                          "keyword_name"=> "reject",
                          "keyword_value"=> "Reject"
                        ],
                        [
                          "screenId"=> "33",
                          "keyword_id"=> 504,
                          "keyword_name"=> "shipped",
                          "keyword_value"=> "Shipped"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "34",
                      "ScreenName"=> "EarningHistoryScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "34",
                          "keyword_id"=> 241,
                          "keyword_name"=> "earning",
                          "keyword_value"=> "Earning "
                        ],
                        [
                          "screenId"=> "34",
                          "keyword_id"=> 242,
                          "keyword_name"=> "adminCommission",
                          "keyword_value"=> "Admin commission "
                        ],
                        [
                          "screenId"=> "34",
                          "keyword_id"=> 243,
                          "keyword_name"=> "orderId",
                          "keyword_value"=> "Order id"
                        ],
                        [
                          "screenId"=> "34",
                          "keyword_id"=> 306,
                          "keyword_name"=> "pickedUp",
                          "keyword_value"=> "Picked up"
                        ],
                        [
                          "screenId"=> "34",
                          "keyword_id"=> 307,
                          "keyword_name"=> "arrived",
                          "keyword_value"=> "Arrived"
                        ],
                        [
                          "screenId"=> "34",
                          "keyword_id"=> 308,
                          "keyword_name"=> "completed",
                          "keyword_value"=> "Completed"
                        ],
                        [
                          "screenId"=> "34",
                          "keyword_id"=> 309,
                          "keyword_name"=> "cancelled",
                          "keyword_value"=> "Cancelled"
                        ],
                        [
                          "screenId"=> "34",
                          "keyword_id"=> 562,
                          "keyword_name"=> "earlyDeliveryMsg",
                          "keyword_value"=> "Sorry! you can not delivery this order now.Scheduled order pickup time doesn't match with current time."
                        ],
                        [
                          "screenId"=> "34",
                          "keyword_id"=> 563,
                          "keyword_name"=> "earlyPickupMsg",
                          "keyword_value"=> "Sorry! you can not pickup this order now.Scheduled order pickup time doesn't match with current time."
                        ],
                        [
                          "screenId"=> "34",
                          "keyword_id"=> 564,
                          "keyword_name"=> "reschedule",
                          "keyword_value"=> "Reschedule"
                        ],
                        [
                          "screenId"=> "34",
                          "keyword_id"=> 565,
                          "keyword_name"=> "rescheduleTitle",
                          "keyword_value"=> "Fill details for reschedule"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "35",
                      "ScreenName"=> "ReceivedScreenOrderScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 244,
                          "keyword_name"=> "orderDeliveredSuccessfully",
                          "keyword_value"=> "Congrats!!Order has been delivered successfully. "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 245,
                          "keyword_name"=> "orderPickupSuccessfully",
                          "keyword_value"=> "Congrats!!Order pickedup successfully. "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 246,
                          "keyword_name"=> "imagePickToCamera",
                          "keyword_value"=> "Image pic to camera "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 247,
                          "keyword_name"=> "imagePicToGallery",
                          "keyword_value"=> "Image pic to gallery "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 248,
                          "keyword_name"=> "orderDeliver",
                          "keyword_value"=> "Order deliver "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 249,
                          "keyword_name"=> "orderPickup",
                          "keyword_value"=> "Order pickup "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 250,
                          "keyword_name"=> "info",
                          "keyword_value"=> "Info "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 251,
                          "keyword_name"=> "paymentCollectFromDelivery",
                          "keyword_value"=> "Collect payment on delivery of the order."
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 252,
                          "keyword_name"=> "paymentCollectFromPickup",
                          "keyword_value"=> "Collect payment on pickup of the order."
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 253,
                          "keyword_name"=> "pickupDatetime",
                          "keyword_value"=> "Pickup at "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 254,
                          "keyword_name"=> "deliveryDatetime",
                          "keyword_value"=> "Delivery date"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 255,
                          "keyword_name"=> "userSignature",
                          "keyword_value"=> "User's signature"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 256,
                          "keyword_name"=> "clear",
                          "keyword_value"=> "Clear"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 257,
                          "keyword_name"=> "deliveryTimeSignature",
                          "keyword_value"=> "Delivery time signature"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 259,
                          "keyword_name"=> "confirmPickup",
                          "keyword_value"=> "Confirm pickup"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 260,
                          "keyword_name"=> "pleaseConfirmPayment",
                          "keyword_value"=> "Please confirm payment"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 261,
                          "keyword_name"=> "selectDeliveryTimeMsg",
                          "keyword_value"=> "Please select delivery time"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 262,
                          "keyword_name"=> "otpVerification",
                          "keyword_value"=> "OTP verification"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 264,
                          "keyword_name"=> "enterTheCodeSendTo",
                          "keyword_value"=> "Enter the code sent to"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 305,
                          "keyword_name"=> "orderCancelledSuccessfully",
                          "keyword_value"=> "Order cancelled successfully"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 328,
                          "keyword_name"=> "placeOrderByMistake",
                          "keyword_value"=> "Place order by mistake "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 329,
                          "keyword_name"=> "deliveryTimeIsTooLong",
                          "keyword_value"=> "Delivery time is too long "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 330,
                          "keyword_name"=> "duplicateOrder",
                          "keyword_value"=> "Duplicate order "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 331,
                          "keyword_name"=> "changeOfMind",
                          "keyword_value"=> "Change of mind "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 332,
                          "keyword_name"=> "changeOrder",
                          "keyword_value"=> "Change order "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 333,
                          "keyword_name"=> "incorrectIncompleteAddress",
                          "keyword_value"=> "Incorrect/incomplete address"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 334,
                          "keyword_name"=> "wrongContactInformation",
                          "keyword_value"=> "Wrong contact information "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 335,
                          "keyword_name"=> "paymentIssue",
                          "keyword_value"=> "Payment issue "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 336,
                          "keyword_name"=> "personNotAvailableOnLocation",
                          "keyword_value"=> "Person not available on location "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 337,
                          "keyword_name"=> "invalidCourierPackage",
                          "keyword_value"=> "Invalid courier package "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 338,
                          "keyword_name"=> "courierPackageIsNotAsPerOrder",
                          "keyword_value"=> "Courier package is not as per order "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 339,
                          "keyword_name"=> "invalidOrder",
                          "keyword_value"=> "Invalid order "
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 117,
                          "keyword_name"=> "damageCourier",
                          "keyword_value"=> "Damage courier"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 315,
                          "keyword_name"=> "sentWrongCourier",
                          "keyword_value"=> "Sent wrong courier"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 276,
                          "keyword_name"=> "notAsOrder",
                          "keyword_value"=> "Not as order"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 404,
                          "keyword_name"=> "isPaymentCollected",
                          "keyword_value"=> "Is the payment collected?"
                        ],
                        [
                          "screenId"=> "35",
                          "keyword_id"=> 409,
                          "keyword_name"=> "collectedAmount",
                          "keyword_value"=> "Collected amount"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "36",
                      "ScreenName"=> "TrackingScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "36",
                          "keyword_id"=> 265,
                          "keyword_name"=> "yourLocation",
                          "keyword_value"=> "Your location"
                        ],
                        [
                          "screenId"=> "36",
                          "keyword_id"=> 266,
                          "keyword_name"=> "lastUpdateAt",
                          "keyword_value"=> "Last update at"
                        ],
                        [
                          "screenId"=> "36",
                          "keyword_id"=> 267,
                          "keyword_name"=> "trackingOrder",
                          "keyword_value"=> "Tracking order"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "37",
                      "ScreenName"=> "VerifyDeliveryPersonScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "37",
                          "keyword_id"=> 268,
                          "keyword_name"=> "uploadFileConfirmationMsg",
                          "keyword_value"=> "Are you sure you want to upload this file?"
                        ],
                        [
                          "screenId"=> "37",
                          "keyword_id"=> 269,
                          "keyword_name"=> "pending",
                          "keyword_value"=> "Pending"
                        ],
                        [
                          "screenId"=> "37",
                          "keyword_id"=> 270,
                          "keyword_name"=> "approved",
                          "keyword_value"=> "Approved"
                        ],
                        [
                          "screenId"=> "37",
                          "keyword_id"=> 271,
                          "keyword_name"=> "rejected",
                          "keyword_value"=> "Rejected"
                        ],
                        [
                          "screenId"=> "37",
                          "keyword_id"=> 272,
                          "keyword_name"=> "selectDocument",
                          "keyword_value"=> "Select document"
                        ],
                        [
                          "screenId"=> "37",
                          "keyword_id"=> 273,
                          "keyword_name"=> "addDocument",
                          "keyword_value"=> "Add document"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "38",
                      "ScreenName"=> "WithDrawScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "38",
                          "keyword_id"=> 274,
                          "keyword_name"=> "declined",
                          "keyword_value"=> "Declined"
                        ],
                        [
                          "screenId"=> "38",
                          "keyword_id"=> 275,
                          "keyword_name"=> "requested",
                          "keyword_value"=> "Requested"
                        ],
                        [
                          "screenId"=> "38",
                          "keyword_id"=> 277,
                          "keyword_name"=> "withdrawHistory",
                          "keyword_value"=> "Withdraw history"
                        ],
                        [
                          "screenId"=> "38",
                          "keyword_id"=> 278,
                          "keyword_name"=> "withdrawMoney",
                          "keyword_value"=> "Withdraw money"
                        ],
                        [
                          "screenId"=> "38",
                          "keyword_id"=> 426,
                          "keyword_name"=> "details",
                          "keyword_value"=> "Details"
                        ],
                        [
                          "screenId"=> "38",
                          "keyword_id"=> 427,
                          "keyword_name"=> "withdrawDetails",
                          "keyword_value"=> "Withdraw details"
                        ],
                        [
                          "screenId"=> "38",
                          "keyword_id"=> 428,
                          "keyword_name"=> "transactionId",
                          "keyword_value"=> "Transaction id"
                        ],
                        [
                          "screenId"=> "38",
                          "keyword_id"=> 429,
                          "keyword_name"=> "via",
                          "keyword_value"=> "via"
                        ],
                        [
                          "screenId"=> "38",
                          "keyword_id"=> 430,
                          "keyword_name"=> "createdDate",
                          "keyword_value"=> "Created date"
                        ],
                        [
                          "screenId"=> "38",
                          "keyword_id"=> 431,
                          "keyword_name"=> "otherDetails",
                          "keyword_value"=> "Other Details"
                        ],
                        [
                          "screenId"=> "38",
                          "keyword_id"=> 432,
                          "keyword_name"=> "image",
                          "keyword_value"=> "Image"
                        ],
                        [
                          "screenId"=> "38",
                          "keyword_id"=> 433,
                          "keyword_name"=> "chatWithAdmin",
                          "keyword_value"=> "Chat with admin"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "39",
                      "ScreenName"=> "OrderFragment",
                      "keyword_data"=> [
                        [
                          "screenId"=> "39",
                          "keyword_id"=> 292,
                          "keyword_name"=> "invoice",
                          "keyword_value"=> "Invoice"
                        ],
                        [
                          "screenId"=> "39",
                          "keyword_id"=> 293,
                          "keyword_name"=> "customerName",
                          "keyword_value"=> "Customer name:"
                        ],
                        [
                          "screenId"=> "39",
                          "keyword_id"=> 294,
                          "keyword_name"=> "deliveredTo",
                          "keyword_value"=> "Delivered to:"
                        ],
                        [
                          "screenId"=> "39",
                          "keyword_id"=> 295,
                          "keyword_name"=> "invoiceNo",
                          "keyword_value"=> "Invoice no:"
                        ],
                        [
                          "screenId"=> "39",
                          "keyword_id"=> 296,
                          "keyword_name"=> "invoiceDate",
                          "keyword_value"=> "Invoice date:"
                        ],
                        [
                          "screenId"=> "39",
                          "keyword_id"=> 297,
                          "keyword_name"=> "orderedDate",
                          "keyword_value"=> "Ordered date:"
                        ],
                        [
                          "screenId"=> "39",
                          "keyword_id"=> 298,
                          "keyword_name"=> "invoiceCapital",
                          "keyword_value"=> "INVOICE "
                        ],
                        [
                          "screenId"=> "39",
                          "keyword_id"=> 299,
                          "keyword_name"=> "product",
                          "keyword_value"=> "Product "
                        ],
                        [
                          "screenId"=> "39",
                          "keyword_id"=> 300,
                          "keyword_name"=> "price",
                          "keyword_value"=> "Price "
                        ],
                        [
                          "screenId"=> "39",
                          "keyword_id"=> 301,
                          "keyword_name"=> "subTotal",
                          "keyword_value"=> "Sub total"
                        ],
                        [
                          "screenId"=> "39",
                          "keyword_id"=> 316,
                          "keyword_name"=> "paid",
                          "keyword_value"=> "Paid"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "40",
                      "ScreenName"=> "StoreListScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "40",
                          "keyword_id"=> 357,
                          "keyword_name"=> "searchStores",
                          "keyword_value"=> "Search stores"
                        ],
                        [
                          "screenId"=> "40",
                          "keyword_id"=> 358,
                          "keyword_name"=> "nearest",
                          "keyword_value"=> "Nearest"
                        ],
                        [
                          "screenId"=> "40",
                          "keyword_id"=> 359,
                          "keyword_name"=> "rightNowStoreNotAvailable",
                          "keyword_value"=> "Right now there is no any store available. Check after sometime."
                        ],
                        [
                          "screenId"=> "40",
                          "keyword_id"=> 369,
                          "keyword_name"=> "stores",
                          "keyword_value"=> "Stores"
                        ],
                        [
                          "screenId"=> "40",
                          "keyword_id"=> 370,
                          "keyword_name"=> "closed",
                          "keyword_value"=> "Closed"
                        ],
                        [
                          "screenId"=> "40",
                          "keyword_id"=> 371,
                          "keyword_name"=> "favouriteStore",
                          "keyword_value"=> "Favourite store"
                        ],
                        [
                          "screenId"=> "40",
                          "keyword_id"=> 377,
                          "keyword_name"=> "openIn",
                          "keyword_value"=> "Open in"
                        ],
                        [
                          "screenId"=> "40",
                          "keyword_id"=> 378,
                          "keyword_name"=> "min",
                          "keyword_value"=> "min"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "41",
                      "ScreenName"=> "ProductListScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "41",
                          "keyword_id"=> 360,
                          "keyword_name"=> "products",
                          "keyword_value"=> "Products"
                        ],
                        [
                          "screenId"=> "41",
                          "keyword_id"=> 361,
                          "keyword_name"=> "itemsAdded",
                          "keyword_value"=> "Items added"
                        ],
                        [
                          "screenId"=> "41",
                          "keyword_id"=> 362,
                          "keyword_name"=> "items",
                          "keyword_value"=> "ITEMS"
                        ],
                        [
                          "screenId"=> "41",
                          "keyword_id"=> 363,
                          "keyword_name"=> "item",
                          "keyword_value"=> "ITEM"
                        ],
                        [
                          "screenId"=> "41",
                          "keyword_id"=> 364,
                          "keyword_name"=> "added",
                          "keyword_value"=> "ADDED"
                        ],
                        [
                          "screenId"=> "41",
                          "keyword_id"=> 365,
                          "keyword_name"=> "categoryFilter",
                          "keyword_value"=> "Category filter"
                        ],
                        [
                          "screenId"=> "41",
                          "keyword_id"=> 366,
                          "keyword_name"=> "apply",
                          "keyword_value"=> "Apply"
                        ],
                        [
                          "screenId"=> "41",
                          "keyword_id"=> 379,
                          "keyword_name"=> "goToStore",
                          "keyword_value"=> "Go to Store"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "42",
                      "ScreenName"=> "VerificationListScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "42",
                          "keyword_id"=> 380,
                          "keyword_name"=> "verify",
                          "keyword_value"=> "Verify"
                        ],
                        [
                          "screenId"=> "42",
                          "keyword_id"=> 381,
                          "keyword_name"=> "verified",
                          "keyword_value"=> "Verified"
                        ],
                        [
                          "screenId"=> "42",
                          "keyword_id"=> 382,
                          "keyword_name"=> "youMustVerifyAboveAll",
                          "keyword_value"=> "You must verify above all"
                        ],
                        [
                          "screenId"=> "42",
                          "keyword_id"=> 383,
                          "keyword_name"=> "verificationYouMustDo",
                          "keyword_value"=> "Verification you must do"
                        ],
                        [
                          "screenId"=> "42",
                          "keyword_id"=> 384,
                          "keyword_name"=> "documentVerification",
                          "keyword_value"=> "Document verification"
                        ],
                        [
                          "screenId"=> "42",
                          "keyword_id"=> 385,
                          "keyword_name"=> "uploadYourDocument",
                          "keyword_value"=> "Upload your documents for verification."
                        ],
                        [
                          "screenId"=> "42",
                          "keyword_id"=> 386,
                          "keyword_name"=> "mobileOtp",
                          "keyword_value"=> "Mobile OTP"
                        ],
                        [
                          "screenId"=> "42",
                          "keyword_id"=> 387,
                          "keyword_name"=> "verifyYourMobileNumber",
                          "keyword_value"=> "Verify your mobile number."
                        ],
                        [
                          "screenId"=> "42",
                          "keyword_id"=> 388,
                          "keyword_name"=> "emailOtp",
                          "keyword_value"=> "Email OTP"
                        ],
                        [
                          "screenId"=> "42",
                          "keyword_id"=> 389,
                          "keyword_name"=> "veirfyYourEmailAddress",
                          "keyword_value"=> "Verify your email address."
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "43",
                      "ScreenName"=> "DHomeFragment",
                      "keyword_data"=> [
                        [
                          "screenId"=> "43",
                          "keyword_id"=> 394,
                          "keyword_name"=> "mustSelectDate",
                          "keyword_value"=> "Must select date"
                        ],
                        [
                          "screenId"=> "43",
                          "keyword_id"=> 395,
                          "keyword_name"=> "filterBelowCount",
                          "keyword_value"=> "Filter below Count"
                        ],
                        [
                          "screenId"=> "43",
                          "keyword_id"=> 396,
                          "keyword_name"=> "viewAllOrders",
                          "keyword_value"=> "View all orders"
                        ],
                        [
                          "screenId"=> "43",
                          "keyword_id"=> 397,
                          "keyword_name"=> "todayOrder",
                          "keyword_value"=> "Today order"
                        ],
                        [
                          "screenId"=> "43",
                          "keyword_id"=> 398,
                          "keyword_name"=> "remainingOrder",
                          "keyword_value"=> "Remaining order"
                        ],
                        [
                          "screenId"=> "43",
                          "keyword_id"=> 399,
                          "keyword_name"=> "completedOrder",
                          "keyword_value"=> "Completed order"
                        ],
                        [
                          "screenId"=> "43",
                          "keyword_id"=> 400,
                          "keyword_name"=> "inProgressOrder",
                          "keyword_value"=> "InProgress order"
                        ],
                        [
                          "screenId"=> "43",
                          "keyword_id"=> 401,
                          "keyword_name"=> "walletBalance",
                          "keyword_value"=> "Wallet balance"
                        ],
                        [
                          "screenId"=> "43",
                          "keyword_id"=> 402,
                          "keyword_name"=> "pendingWithdReq",
                          "keyword_value"=> "Pending withdrawal request"
                        ],
                        [
                          "screenId"=> "43",
                          "keyword_id"=> 403,
                          "keyword_name"=> "completedWithReq",
                          "keyword_value"=> "Completed withdrawal request"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "44",
                      "ScreenName"=> "RewardListScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "44",
                          "keyword_id"=> 412,
                          "keyword_name"=> "earnedRewards",
                          "keyword_value"=> "Earned rewards"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "45",
                      "ScreenName"=> "ReferEarnScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "45",
                          "keyword_id"=> 413,
                          "keyword_name"=> "referAndEarn",
                          "keyword_value"=> "Refer & earn"
                        ],
                        [
                          "screenId"=> "45",
                          "keyword_id"=> 470,
                          "keyword_name"=> "referDes1",
                          "keyword_value"=> "Refer to your friend and get a reward upto"
                        ],
                        [
                          "screenId"=> "45",
                          "keyword_id"=> 471,
                          "keyword_name"=> "referDes2",
                          "keyword_value"=> "every month "
                        ],
                        [
                          "screenId"=> "45",
                          "keyword_id"=> 472,
                          "keyword_name"=> "referShareTitle",
                          "keyword_value"=> "Share this code with your friend to get rewards upto"
                        ],
                        [
                          "screenId"=> "45",
                          "keyword_id"=> 473,
                          "keyword_name"=> "shareDes1",
                          "keyword_value"=> "'I’m using this "
                        ],
                        [
                          "screenId"=> "45",
                          "keyword_id"=> 474,
                          "keyword_name"=> "shareDes2",
                          "keyword_value"=> "and I thought you might like it too. Use my referral code"
                        ],
                        [
                          "screenId"=> "45",
                          "keyword_id"=> 475,
                          "keyword_name"=> "shareDes3",
                          "keyword_value"=> " to sign up and get some cool rewards! "
                        ],
                        [
                          "screenId"=> "45",
                          "keyword_id"=> 519,
                          "keyword_name"=> "copiedToClipBoard",
                          "keyword_value"=> " copied to clipboard "
                        ],
                        [
                          "screenId"=> "45",
                          "keyword_id"=> 520,
                          "keyword_name"=> "yourVehicle",
                          "keyword_value"=> " Your vehicle "
                        ],
                        [
                          "screenId"=> "45",
                          "keyword_id"=> 521,
                          "keyword_name"=> "noVehicleAdded",
                          "keyword_value"=> "No vehicle added "
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "46",
                      "ScreenName"=> "ReferralHistoryScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "46",
                          "keyword_id"=> 414,
                          "keyword_name"=> "referralHistory",
                          "keyword_value"=> "Referral history"
                        ],
                        [
                          "screenId"=> "46",
                          "keyword_id"=> 447,
                          "keyword_name"=> "userType",
                          "keyword_value"=> "User Type"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "47",
                      "ScreenName"=> "CustomerSupportScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "47",
                          "keyword_id"=> 415,
                          "keyword_name"=> "customerSupport",
                          "keyword_value"=> "Customer support"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "48",
                      "ScreenName"=> "FilterCountScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "48",
                          "keyword_id"=> 416,
                          "keyword_name"=> "today",
                          "keyword_value"=> "Today"
                        ],
                        [
                          "screenId"=> "48",
                          "keyword_id"=> 417,
                          "keyword_name"=> "yesterday",
                          "keyword_value"=> "yesterday"
                        ],
                        [
                          "screenId"=> "48",
                          "keyword_id"=> 418,
                          "keyword_name"=> "thisWeek",
                          "keyword_value"=> "This week"
                        ],
                        [
                          "screenId"=> "48",
                          "keyword_id"=> 419,
                          "keyword_name"=> "thisMonth",
                          "keyword_value"=> "This Month"
                        ],
                        [
                          "screenId"=> "48",
                          "keyword_id"=> 420,
                          "keyword_name"=> "thisYear",
                          "keyword_value"=> "This Year"
                        ],
                        [
                          "screenId"=> "48",
                          "keyword_id"=> 421,
                          "keyword_name"=> "custom",
                          "keyword_value"=> "Custom"
                        ],
                        [
                          "screenId"=> "48",
                          "keyword_id"=> 422,
                          "keyword_name"=> "orderFilter",
                          "keyword_value"=> "Order Filter"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "49",
                      "ScreenName"=> "OrdersMapScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "49",
                          "keyword_id"=> 423,
                          "keyword_name"=> "pendingPickup",
                          "keyword_value"=> "pending pickup"
                        ],
                        [
                          "screenId"=> "49",
                          "keyword_id"=> 424,
                          "keyword_name"=> "pendingDelivery",
                          "keyword_value"=> "pending delivery"
                        ],
                        [
                          "screenId"=> "49",
                          "keyword_id"=> 425,
                          "keyword_name"=> "view",
                          "keyword_value"=> "view"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "50",
                      "ScreenName"=> "AddSupportTicketScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 435,
                          "keyword_name"=> "addSupportTicket",
                          "keyword_value"=> "Add support ticket"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 436,
                          "keyword_name"=> "message",
                          "keyword_value"=> "Message"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 437,
                          "keyword_name"=> "supportType",
                          "keyword_value"=> "Support Type"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 438,
                          "keyword_name"=> "uploadDetails",
                          "keyword_value"=> "Upload Details"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 439,
                          "keyword_name"=> "video",
                          "keyword_value"=> "Video"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 440,
                          "keyword_name"=> "select",
                          "keyword_value"=> "Select"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 441,
                          "keyword_name"=> "supportId",
                          "keyword_value"=> "Support id"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 442,
                          "keyword_name"=> "attachment",
                          "keyword_value"=> "Attachment"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 443,
                          "keyword_name"=> "viewPhoto",
                          "keyword_value"=> "view photo"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 444,
                          "keyword_name"=> "viewVideo",
                          "keyword_value"=> "view video"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 445,
                          "keyword_name"=> "resolutionDetails",
                          "keyword_value"=> "Resolution Details"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 446,
                          "keyword_name"=> "completedOrders",
                          "keyword_value"=> "Completed Orders"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 512,
                          "keyword_name"=> "supportType1",
                          "keyword_value"=> "Orders"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 513,
                          "keyword_name"=> "supportType2",
                          "keyword_value"=> "Delivery person"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 514,
                          "keyword_name"=> "supportType3",
                          "keyword_value"=> "Return order"
                        ],
                        [
                          "screenId"=> "50",
                          "keyword_id"=> 515,
                          "keyword_name"=> "supportType4",
                          "keyword_value"=> "Delivery timing"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "51",
                      "ScreenName"=> "AddAddressScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "51",
                          "keyword_id"=> 453,
                          "keyword_name"=> "home",
                          "keyword_value"=> "Home"
                        ],
                        [
                          "screenId"=> "51",
                          "keyword_id"=> 454,
                          "keyword_name"=> "work",
                          "keyword_value"=> "Work"
                        ],
                        [
                          "screenId"=> "51",
                          "keyword_id"=> 455,
                          "keyword_name"=> "selectAddressType",
                          "keyword_value"=> "Select address type"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "52",
                      "ScreenName"=> "RateReviewScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "52",
                          "keyword_id"=> 468,
                          "keyword_name"=> "rateUs",
                          "keyword_value"=> "Rate Us"
                        ],
                        [
                          "screenId"=> "52",
                          "keyword_id"=> 469,
                          "keyword_name"=> "excellent",
                          "keyword_value"=> "Excellent..."
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "53",
                      "ScreenName"=> "PackagingSymbolsInfo",
                      "keyword_data"=> [
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 479,
                          "keyword_name"=> "thisWayUup",
                          "keyword_value"=> "This Way Up"
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 480,
                          "keyword_name"=> "thisWayUpDesc",
                          "keyword_value"=> "Shows the correct upright position for the package to ensure proper handling."
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 481,
                          "keyword_name"=> "doNotStack",
                          "keyword_value"=> "Do Not Stack"
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 482,
                          "keyword_name"=> "doNotStackDesc",
                          "keyword_value"=> "Warns that the package should not have other items stacked on top to prevent damage."
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 483,
                          "keyword_name"=> "temperatureSensitive",
                          "keyword_value"=> "Temperature-Sensitive"
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 484,
                          "keyword_name"=> "temperatureSensitiveDesc",
                          "keyword_value"=> "Indicates that the package contains items that need to be kept at a specific temperature range."
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 485,
                          "keyword_name"=> "doNotHook",
                          "keyword_value"=> "Do Not Use Hooks"
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 486,
                          "keyword_name"=> "doNotHookDesc",
                          "keyword_value"=> "Warns that hooks should not be used to handle or lift the package."
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 487,
                          "keyword_name"=> "explosiveMaterial",
                          "keyword_value"=> "Explosive Material"
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 488,
                          "keyword_name"=> "explosiveMaterialDesc",
                          "keyword_value"=> "Indicates that the package contains explosive materials and should be handled with extreme caution."
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 489,
                          "keyword_name"=> "hazard",
                          "keyword_value"=> "Hazardous Material"
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 490,
                          "keyword_name"=> "hazardDesc",
                          "keyword_value"=> "Warns that the package contains hazardous materials that require special handling."
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 491,
                          "keyword_name"=> "bikeDelivery",
                          "keyword_value"=> "Bike Delivery"
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 492,
                          "keyword_name"=> "bikeDeliveryDesc",
                          "keyword_value"=> "Indicates that Delivery will be completed by bike."
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 493,
                          "keyword_name"=> "keepDry",
                          "keyword_value"=> "Keep Dry"
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 494,
                          "keyword_name"=> "keepDryDesc",
                          "keyword_value"=> "Indicates that the package should be kept dry and protected from moisture or water."
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 495,
                          "keyword_name"=> "perishable",
                          "keyword_value"=> "Perishable"
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 496,
                          "keyword_name"=> "perishableDesc",
                          "keyword_value"=> "Indicates that the package contains perishable items that need to be handled quickly to avoid spoilage."
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 497,
                          "keyword_name"=> "recycle",
                          "keyword_value"=> "Recycle"
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 498,
                          "keyword_name"=> "recycleDesc",
                          "keyword_value"=> "Indicates that the packaging materials are recyclable."
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 499,
                          "keyword_name"=> "doNotOpenWithSharpObject",
                          "keyword_value"=> "Do Not Open with Sharp Objects"
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 500,
                          "keyword_name"=> "doNotOpenWithSharpObjectDesc",
                          "keyword_value"=> "Warns against using sharp objects to open the package to prevent damage to the contents."
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 501,
                          "keyword_name"=> "fragile",
                          "keyword_value"=> "Fragile (Handle with Care)"
                        ],
                        [
                          "screenId"=> "53",
                          "keyword_id"=> 502,
                          "keyword_name"=> "fragileDesc",
                          "keyword_value"=> "Indicates that the contents of the package are fragile and should be handled with care to prevent breakage."
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "54",
                      "ScreenName"=> "AddDeliverymanVehicleScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 522,
                          "keyword_name"=> "updateVehicle",
                          "keyword_value"=> "Update vehicle"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 523,
                          "keyword_name"=> "vehicleInfo",
                          "keyword_value"=> "Vehicle info"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 524,
                          "keyword_name"=> "addVehicle",
                          "keyword_value"=> "Add vehicle"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 525,
                          "keyword_name"=> "model",
                          "keyword_value"=> "Model"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 526,
                          "keyword_name"=> "color",
                          "keyword_value"=> "Color"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 527,
                          "keyword_name"=> "yearOfManufacturing",
                          "keyword_value"=> "Year of manufacture"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 528,
                          "keyword_name"=> "vehicleIdentificationNumber",
                          "keyword_value"=> "Vehicle identification number"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 529,
                          "keyword_name"=> "licensePlateNumber",
                          "keyword_value"=> "License plate number"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 530,
                          "keyword_name"=> "currentMileage",
                          "keyword_value"=> "Current mileage"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 531,
                          "keyword_name"=> "fuelType",
                          "keyword_value"=> "Fuel type"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 532,
                          "keyword_name"=> "transmissionType",
                          "keyword_value"=> "Transmission type"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 533,
                          "keyword_name"=> "ownerName",
                          "keyword_value"=> "Owner name"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 534,
                          "keyword_name"=> "registrationDate",
                          "keyword_value"=> "Registration date"
                        ],
                        [
                          "screenId"=> "54",
                          "keyword_id"=> 535,
                          "keyword_name"=> "ownerNumber",
                          "keyword_value"=> "Owner number"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "55",
                      "ScreenName"=> "SelectVehicleScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "55",
                          "keyword_id"=> 536,
                          "keyword_name"=> "id",
                          "keyword_value"=> "Id"
                        ],
                        [
                          "screenId"=> "55",
                          "keyword_id"=> 537,
                          "keyword_name"=> "active",
                          "keyword_value"=> "Active"
                        ],
                        [
                          "screenId"=> "55",
                          "keyword_id"=> 538,
                          "keyword_name"=> "inActive",
                          "keyword_value"=> "Inactive"
                        ],
                        [
                          "screenId"=> "55",
                          "keyword_id"=> 539,
                          "keyword_name"=> "startDate",
                          "keyword_value"=> "Start date"
                        ],
                        [
                          "screenId"=> "55",
                          "keyword_id"=> 540,
                          "keyword_name"=> "endDate",
                          "keyword_value"=> "End date"
                        ],
                        [
                          "screenId"=> "55",
                          "keyword_id"=> 541,
                          "keyword_name"=> "clickHere",
                          "keyword_value"=> "Click here"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "56",
                      "ScreenName"=> "ClaimScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 544,
                          "keyword_name"=> "claimHistory",
                          "keyword_value"=> "Claim history"
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 545,
                          "keyword_name"=> "proofValue",
                          "keyword_value"=> "Proof value"
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 546,
                          "keyword_name"=> "trackinNo",
                          "keyword_value"=> "Tracking no"
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 548,
                          "keyword_name"=> "ofApproxParcelValue",
                          "keyword_value"=> "% of approx parcel value"
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 550,
                          "keyword_name"=> "claimInsurance",
                          "keyword_value"=> "Claim insurance"
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 551,
                          "keyword_name"=> "fillTheDetailsForClaim",
                          "keyword_value"=> "Fill the details for claim"
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 552,
                          "keyword_name"=> "addAttachmentMsg",
                          "keyword_value"=> "Please add images or pdfs for better clarity,however it is not compulsory to do so click 'claim' to proceed further."
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 553,
                          "keyword_name"=> "title",
                          "keyword_value"=> "Title"
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 554,
                          "keyword_name"=> "enterProofValue",
                          "keyword_value"=> "Enter proof value"
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 555,
                          "keyword_name"=> "selectedFiles",
                          "keyword_value"=> "Selected files"
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 556,
                          "keyword_name"=> "addProofs",
                          "keyword_value"=> "Add proofs"
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 543,
                          "keyword_name"=> "claim",
                          "keyword_value"=> "Claim"
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 557,
                          "keyword_name"=> "proofDetails",
                          "keyword_value"=> "Proof details"
                        ],
                        [
                          "screenId"=> "56",
                          "keyword_id"=> 561,
                          "keyword_name"=> "approvedAmount",
                          "keyword_value"=> "Approved Amount"
                        ]
                      ]
                    ],
                    [
                      "screenID"=> "57",
                      "ScreenName"=> "BidListScreen",
                      "keyword_data"=> [
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 567,
                          "keyword_name"=> "acceptBid",
                          "keyword_value"=> "Accept Bid"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 568,
                          "keyword_name"=> "viewAll",
                          "keyword_value"=> "View All"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 569,
                          "keyword_name"=> "estimateAmount",
                          "keyword_value"=> "Estimate Amount"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 570,
                          "keyword_name"=> "decline",
                          "keyword_value"=> "Decline"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 571,
                          "keyword_name"=> "declineBidConfirm",
                          "keyword_value"=> "Are you sure you want to decline this bid"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 572,
                          "keyword_name"=> "cancelBid",
                          "keyword_value"=> "Cancel Bid"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 573,
                          "keyword_name"=> "withdrawBid",
                          "keyword_value"=> "Withdraw Bid"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 574,
                          "keyword_name"=> "withdrawBidConfirm",
                          "keyword_value"=> "Do you want to withdraw this bid"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 575,
                          "keyword_name"=> "confirm",
                          "keyword_value"=> "Confirm"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 576,
                          "keyword_name"=> "confirmBid",
                          "keyword_value"=> "Confirm Bid"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 577,
                          "keyword_name"=> "saySomething",
                          "keyword_value"=> "Say anything... (Optional)"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 578,
                          "keyword_name"=> "placeYourBid",
                          "keyword_value"=> "Place your Bid"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 579,
                          "keyword_name"=> "deliveryBid",
                          "keyword_value"=> "Delivery Bids"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 580,
                          "keyword_name"=> "note",
                          "keyword_value"=> "Note"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 581,
                          "keyword_name"=> "noNotesAvailable",
                          "keyword_value"=> "No notes available"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 582,
                          "keyword_name"=> "bidAmount",
                          "keyword_value"=> "Bid Amount"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 583,
                          "keyword_name"=> "bidFetchFailedMsg",
                          "keyword_value"=> "Failed to fetch bids. Please try again."
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 584,
                          "keyword_name"=> "bids",
                          "keyword_value"=> "Bids"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 585,
                          "keyword_name"=> "noBidsFound",
                          "keyword_value"=> "There are no bids for this order! Please wait."
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 586,
                          "keyword_name"=> "bidRequest",
                          "keyword_value"=> "Bid Request"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 587,
                          "keyword_name"=> "acceptBidConfirm",
                          "keyword_value"=> "Do you want to accept this bid"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 588,
                          "keyword_name"=> "close",
                          "keyword_value"=> "Close"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 589,
                          "keyword_name"=> "orderAvailableForBidding",
                          "keyword_value"=> "New Orders are available for bidding"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 590,
                          "keyword_name"=> "bidAvailableForCancel",
                          "keyword_value"=> "Placed bid can be cancelled"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 591,
                          "keyword_name"=> "bidAccepted",
                          "keyword_value"=> "Bid accepted"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 592,
                          "keyword_name"=> "bidPlaced",
                          "keyword_value"=> "Bid placed"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 593,
                          "keyword_name"=> "newOrder",
                          "keyword_value"=> "New Order"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 594,
                          "keyword_name"=> "bidRejected",
                          "keyword_value"=> "Bid rejected"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 595,
                          "keyword_name"=> "placeBid",
                          "keyword_value"=> "Place Bid"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 596,
                          "keyword_name"=> "totalAmount",
                          "keyword_value"=> "Total Amount"
                        ],
                        [
                          "screenId"=> "57",
                          "keyword_id"=> 597,
                          "keyword_name"=> "youPlaced",
                          "keyword_value"=> "You Placed"
                        ]
                      ]
                    ]
            ];
        foreach ($screen_data as $screen) {
        $screen_record = Screen::where('screenID', $screen['screenID'])->first();

        if ($screen_record == null) {
            $screen_record = Screen::create([
            'screenId'   => $screen['screenID'],
            'screenName' => $screen['ScreenName']
            ]);
        }

        if (isset($screen['keyword_data']) && count($screen['keyword_data']) > 0) {
            foreach ($screen['keyword_data'] as $keyword_data) {
            $keyword_record = DefaultKeyword::where('keyword_id', $keyword_data['keyword_id'])->first();

            if ($keyword_record == null) {
                $keyword_record = DefaultKeyword::create([
                'screen_id' => $screen_record['screenId'],
                'keyword_id' => $keyword_data['keyword_id'],
                'keyword_name' => $keyword_data['keyword_name'],
                'keyword_value' => $keyword_data['keyword_value']
                ]);
            }
            }
        }
        }
        $unmatchedKeywords = [];
        foreach ($screen_data as $screen) {
            $screen_record = Screen::where('screenID', $screen['screenID'])->first();

            if ($screen_record == null) {
                $screen_record = Screen::create([
                'screenId'   => $screen['screenID'],
                'screenName' => $screen['ScreenName']
                ]);
            }

            if (isset($screen['keyword_data']) && count($screen['keyword_data']) > 0) {
                foreach ($screen['keyword_data'] as $keyword_data) {
                    $keyword_record = DefaultKeyword::where('keyword_id', $keyword_data['keyword_id'])->first();

                    if ($keyword_record == null) {
                        $keyword_record = DefaultKeyword::create([
                        'screen_id' => $screen_record['screenId'],
                        'keyword_id' => $keyword_data['keyword_id'],
                        'keyword_name' => $keyword_data['keyword_name'],
                        'keyword_value' => $keyword_data['keyword_value']
                        ]);
                    }
                    if (!in_array($keyword_data['keyword_id'], $fetchedKeywords)) {
                        $unmatchedKeywords[] = $keyword_data;

                        foreach ($languageListIds as $languageId) {
                            LanguageWithKeyword::create([
                                'screen_id'      => $keyword_data['screenId'],
                                'keyword_id'     => $keyword_data['keyword_id'],
                                'keyword_value'  => $keyword_data['keyword_value'],
                                'language_id'    => $languageId,
                            ]);
                        }
                    }
                }
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lanuage', function (Blueprint $table) {
            //
        });
    }
}
