<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<svg style="display: none;">
  <symbol id="btn-white-angle-svg" width="6" height="8" viewBox="0 0 6 8">
  <path d="M0.606555 0.000137755C0.488317 -0.00246282 0.372207 0.0318128 0.274366 0.0982521C0.176525 0.164691 0.101816 0.260011 0.0606254 0.370872C0.0194347 0.481734 0.0138091 0.602658 0.0445306 0.716865C0.0752521 0.831071 0.140794 0.932823 0.232045 1.00806L3.71377 3.9908L0.232045 6.97249C0.168922 7.01889 0.116058 7.07778 0.0767644 7.14555C0.0374702 7.21332 0.0125922 7.2885 0.00368797 7.36633C-0.00521629 7.44416 0.00204522 7.52297 0.0250177 7.59787C0.0479902 7.67276 0.0861785 7.74212 0.137192 7.80158C0.188205 7.86103 0.250944 7.90925 0.321479 7.94333C0.392015 7.97741 0.468827 7.99656 0.547107 7.99958C0.625386 8.0026 0.703446 7.98947 0.776397 7.96092C0.849349 7.93238 0.915621 7.88908 0.971064 7.83373L4.95732 4.42309C5.01992 4.36967 5.07019 4.30337 5.10466 4.22864C5.13912 4.15391 5.15697 4.07257 5.15697 3.99027C5.15697 3.90798 5.13912 3.82664 5.10466 3.75191C5.07019 3.67718 5.01992 3.61081 4.95732 3.55739L0.971064 0.14347C0.870365 0.0540263 0.741204 0.00317536 0.606555 6.49802e-06V0.000137755Z"/>
  </symbol>
  <symbol id="play-button-svg" width="50" height="50" viewBox="0 0 50 50">
  <g clip-path="url(#clip0)">
  <path d="M49.9869 24.1847C49.5674 11.05 38.9502 0.433179 25.816 0.0137275C18.6691 -0.213022 11.9828 2.50727 7.04138 7.60913C2.29087 12.5137 -0.205125 18.9796 0.0132007 25.8165C0.432301 38.9507 11.0495 49.568 24.1838 49.9871C24.4572 49.9958 24.7282 50 24.9999 50C31.8283 50 38.2061 47.298 42.9583 42.3917C47.7089 37.4874 50.2052 31.0212 49.9869 24.1847ZM39.1766 38.7289C35.4251 42.6023 30.3902 44.7353 24.9999 44.7353C24.7843 44.7353 24.5688 44.7318 24.3516 44.7251C13.9857 44.3941 5.60647 36.0149 5.27512 25.6487C5.10278 20.2495 7.07297 15.1438 10.8231 11.2722C14.5747 7.39888 19.6095 5.26582 24.9999 5.26582C25.2154 5.26582 25.4309 5.26933 25.6482 5.276C36.0141 5.607 44.3933 13.9862 44.7246 24.3524C44.8969 29.7516 42.9264 34.8573 39.1766 38.7289Z" fill="#CB9F67"/>
  <path d="M33.2001 23.5475L22.1139 15.5987C20.9314 14.7506 19.2852 15.5959 19.2852 17.0511V32.9492C19.2852 34.4045 20.9314 35.2497 22.1139 34.4017L33.1997 26.4525C34.1945 25.7396 34.1945 24.2608 33.2001 23.5475Z"/>
  </g>
  <defs>
  <clipPath id="clip0">
  <rect width="50" height="50" fill="white"/>
  </clipPath>
  </defs>
  </symbol>

  <symbol id="play-icon-svg" width="18" height="24" viewBox="0 0 18 24" fill="none">
  <path d="M17.0844 10.2102L3.47307 0.416443C2.02118 -0.62841 0 0.412984 0 2.20601V21.794C0 23.587 2.02118 24.6284 3.47307 23.5836L17.0839 13.7894C18.3053 12.911 18.3053 11.089 17.0844 10.2102Z" fill="white"/>
  </symbol>
  <symbol id="push-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M9.06855 20.6571C9.06855 22.5032 7.5718 24 5.72568 24C3.87957 24 2.38281 22.5032 2.38281 20.6571V3.34287C2.38281 1.49675 3.87957 0 5.72568 0C7.5718 0 9.06855 1.49675 9.06855 3.34287V20.6571Z" fill="white"/>
  <path d="M21.6154 20.6571C21.6154 22.5032 20.1187 24 18.2726 24C16.4264 24 14.9297 22.5032 14.9297 20.6571V3.34287C14.9302 1.49675 16.4269 0 18.2726 0C20.1187 0 21.6154 1.49675 21.6154 3.34287V20.6571Z" fill="white"/>
  </symbol>
  <symbol id="blockquote-icon-svg" width="44" height="32" viewBox="0 0 44 32" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M15.7363 29.1801C14.1363 30.7801 12.0763 31.5801 9.55633 31.5801C7.03633 31.5801 4.93633 30.6601 3.25633 28.8201C1.57633 26.9401 0.736328 24.5401 0.736328 21.6201C0.736328 16.2601 2.39633 11.6201 5.71633 7.70008C9.07633 3.74008 13.4163 1.20008 18.7363 0.0800781L19.2163 1.28008C14.3363 2.40008 10.3563 4.60008 7.27633 7.88008C4.19633 11.1601 2.45633 15.3401 2.05633 20.4201C2.65633 18.6601 3.67633 17.2801 5.11633 16.2801C6.55633 15.2401 8.15633 14.7201 9.91633 14.7201C12.2763 14.7201 14.2363 15.5201 15.7963 17.1201C17.3563 18.6801 18.1363 20.6801 18.1363 23.1201C18.1363 25.5601 17.3363 27.5801 15.7363 29.1801ZM39.6163 29.1801C38.0163 30.7801 35.9563 31.5801 33.4363 31.5801C30.9163 31.5801 28.8163 30.6601 27.1363 28.8201C25.4563 26.9401 24.6163 24.5401 24.6163 21.6201C24.6163 16.2601 26.2763 11.6201 29.5963 7.70008C32.9563 3.74008 37.2963 1.20008 42.6163 0.0800781L43.0963 1.28008C38.2163 2.40008 34.2363 4.60008 31.1563 7.88008C28.0763 11.1601 26.3363 15.3401 25.9363 20.4201C26.5363 18.6601 27.5563 17.2801 28.9963 16.2801C30.4363 15.2401 32.0363 14.7201 33.7963 14.7201C36.1563 14.7201 38.1163 15.5201 39.6763 17.1201C41.2363 18.6801 42.0163 20.6801 42.0163 23.1201C42.0163 25.5601 41.2163 27.5801 39.6163 29.1801Z" fill="#CB9F67"/>
  </symbol>
  <symbol id="facebool-icon" width="25" height="24" viewBox="0 0 25 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M12.1212 0C5.4376 0 0 5.38323 0 12C0 18.6163 5.4376 24 12.1212 24C18.8043 24 24.2424 18.6163 24.2424 12C24.2424 5.38323 18.8053 0 12.1212 0ZM15.1356 12.4225H13.1636V19.381H10.2415C10.2415 19.381 10.2415 15.5788 10.2415 12.4225H8.8524V9.9631H10.2415V8.37235C10.2415 7.23306 10.7883 5.45283 13.1905 5.45283L15.3558 5.46105V7.84838C15.3558 7.84838 14.04 7.84838 13.7842 7.84838C13.5283 7.84838 13.1646 7.97503 13.1646 8.51833V9.96359H15.391L15.1356 12.4225Z"/>
  </symbol>

  <symbol id="instagram-icon" width="25" height="24" viewBox="0 0 25 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M12.1209 14.4023C13.4582 14.4023 14.5485 13.3249 14.5485 12C14.5485 11.477 14.3756 10.9941 14.0895 10.5997C13.6486 9.9945 12.9319 9.59766 12.1224 9.59766C11.3124 9.59766 10.5961 9.99401 10.1543 10.5992C9.86718 10.9936 9.6958 11.4765 9.69531 11.9995C9.69385 13.3244 10.7831 14.4023 12.1209 14.4023Z"/>
  <path d="M17.4198 9.06094V7.04724V6.74756L17.1156 6.74853L15.0825 6.75481L15.0903 9.06867L17.4198 9.06094Z"/>
  <path d="M12.1212 0C5.4376 0 0 5.38323 0 12C0 18.6163 5.4376 24 12.1212 24C18.8043 24 24.2424 18.6163 24.2424 12C24.2424 5.38323 18.8053 0 12.1212 0ZM19.0148 10.5997V16.1874C19.0148 17.6428 17.8195 18.8256 16.3504 18.8256H7.89202C6.4224 18.8256 5.22766 17.6428 5.22766 16.1874V10.5997V7.81358C5.22766 6.35866 6.4224 5.17586 7.89202 5.17586H16.3499C17.8195 5.17586 19.0148 6.35866 19.0148 7.81358V10.5997Z"/>
  <path d="M15.8919 11.9999C15.8919 14.0576 14.2006 15.7329 12.1212 15.7329C10.0417 15.7329 8.35095 14.0576 8.35095 11.9999C8.35095 11.5049 8.45055 11.0317 8.62827 10.5996H6.57031V16.1873C6.57031 16.9094 7.16256 17.4943 7.89151 17.4943H16.3494C17.0774 17.4943 17.6706 16.9094 17.6706 16.1873V10.5996H15.6117C15.7909 11.0317 15.8919 11.5049 15.8919 11.9999Z"/>
  </symbol>
  <symbol id="dfp-lftimg-rtdesc-icon" width="6" height="8" viewBox="0 0 6 8" xmlns="http://www.w3.org/2000/svg">
  <path d="M0.606555 0.000137755C0.488317 -0.00246282 0.372207 0.0318128 0.274366 0.0982521C0.176525 0.164691 0.101816 0.260011 0.0606254 0.370872C0.0194347 0.481734 0.0138091 0.602658 0.0445306 0.716865C0.0752521 0.831071 0.140794 0.932823 0.232045 1.00806L3.71377 3.9908L0.232045 6.97249C0.168922 7.01889 0.116058 7.07778 0.0767644 7.14555C0.0374702 7.21332 0.0125922 7.2885 0.00368797 7.36633C-0.00521629 7.44416 0.00204522 7.52297 0.0250177 7.59787C0.0479902 7.67276 0.0861785 7.74212 0.137192 7.80158C0.188205 7.86103 0.250944 7.90925 0.321479 7.94333C0.392015 7.97741 0.468827 7.99656 0.547107 7.99958C0.625386 8.0026 0.703446 7.98947 0.776397 7.96092C0.849349 7.93238 0.915621 7.88908 0.971064 7.83373L4.95732 4.42309C5.01992 4.36967 5.07019 4.30337 5.10466 4.22864C5.13912 4.15391 5.15697 4.07257 5.15697 3.99027C5.15697 3.90798 5.13912 3.82664 5.10466 3.75191C5.07019 3.67718 5.01992 3.61081 4.95732 3.55739L0.971064 0.14347C0.870365 0.0540263 0.741204 0.00317536 0.606555 6.49802e-06V0.000137755Z"/>
  </symbol>
  <symbol id="contact-info-fb-icon-svg" width="25" height="24" viewBox="0 0 25 24"  xmlns="http://www.w3.org/2000/svg">
  <path d="M12.1212 0C5.4376 0 0 5.38323 0 12C0 18.6163 5.4376 24 12.1212 24C18.8043 24 24.2424 18.6163 24.2424 12C24.2424 5.38323 18.8053 0 12.1212 0ZM15.1356 12.4225H13.1636V19.381H10.2415C10.2415 19.381 10.2415 15.5788 10.2415 12.4225H8.8524V9.9631H10.2415V8.37235C10.2415 7.23306 10.7883 5.45283 13.1905 5.45283L15.3558 5.46105V7.84838C15.3558 7.84838 14.04 7.84838 13.7842 7.84838C13.5283 7.84838 13.1646 7.97503 13.1646 8.51833V9.96359H15.391L15.1356 12.4225Z"/>
  </symbol>
  <symbol id="contact-info-ins-icon-svg" width="25" height="24" viewBox="0 0 25 24"  xmlns="http://www.w3.org/2000/svg">
  <path d="M12.1209 14.4023C13.4582 14.4023 14.5485 13.3249 14.5485 12C14.5485 11.477 14.3756 10.9941 14.0895 10.5997C13.6486 9.9945 12.9319 9.59766 12.1224 9.59766C11.3124 9.59766 10.5961 9.99401 10.1543 10.5992C9.86718 10.9936 9.6958 11.4765 9.69531 11.9995C9.69385 13.3244 10.7831 14.4023 12.1209 14.4023Z"/>
  <path d="M17.4193 9.06094V7.04724V6.74756L17.1151 6.74853L15.082 6.75481L15.0898 9.06867L17.4193 9.06094Z"/>
  <path d="M12.1212 0C5.4376 0 0 5.38323 0 12C0 18.6163 5.4376 24 12.1212 24C18.8043 24 24.2424 18.6163 24.2424 12C24.2424 5.38323 18.8053 0 12.1212 0ZM19.0148 10.5997V16.1874C19.0148 17.6428 17.8195 18.8256 16.3504 18.8256H7.89202C6.4224 18.8256 5.22766 17.6428 5.22766 16.1874V10.5997V7.81358C5.22766 6.35866 6.4224 5.17586 7.89202 5.17586H16.3499C17.8195 5.17586 19.0148 6.35866 19.0148 7.81358V10.5997Z"/>
  <path d="M15.8919 11.9999C15.8919 14.0576 14.2006 15.7329 12.1212 15.7329C10.0417 15.7329 8.35095 14.0576 8.35095 11.9999C8.35095 11.5049 8.45055 11.0317 8.62827 10.5996H6.57031V16.1873C6.57031 16.9094 7.16256 17.4943 7.89151 17.4943H16.3494C17.0774 17.4943 17.6706 16.9094 17.6706 16.1873V10.5996H15.6117C15.7909 11.0317 15.8919 11.5049 15.8919 11.9999Z"/>
  </symbol>
  <symbol id="contact-info-phone-icon-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0)">
  <path d="M1.92575 15.7533C3.39513 15.7533 4.83788 15.5234 6.20506 15.0716C6.875 14.8431 7.69856 15.0528 8.10744 15.4727L10.806 17.5098C13.9356 15.8393 15.8633 13.9121 17.5111 10.8061L15.5339 8.17781C15.0202 7.66481 14.8359 6.91544 15.0567 6.21231C15.5104 4.83794 15.7409 3.39587 15.7409 1.92587C15.7409 0.863937 16.6048 0 17.6667 0H22.0742C23.1361 0 24 0.863937 24 1.92581C24 14.0977 14.0976 24 1.92575 24C0.863876 24 -6.29425e-05 23.1361 -6.29425e-05 22.0742V17.679C0 16.6172 0.863937 15.7533 1.92575 15.7533Z"/>
  </g>
  <defs>
  <clipPath id="clip0">
  <rect width="24" height="24" fill="white" transform="matrix(-1 0 0 1 24 0)"/>
  </clipPath>
  </defs>
  </symbol>
  <symbol id="contact-info-map-icon-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <g clip-path="url(#clip0)">
  <path d="M12 0C7.038 0 3 4.066 3 9.065C3 16.168 11.154 23.502 11.501 23.81C11.644 23.937 11.822 24 12 24C12.178 24 12.356 23.937 12.499 23.811C12.846 23.502 21 16.168 21 9.065C21 4.066 16.962 0 12 0ZM12 14C9.243 14 7 11.757 7 9C7 6.243 9.243 4 12 4C14.757 4 17 6.243 17 9C17 11.757 14.757 14 12 14Z"/>
  </g>
  <defs>
  <clipPath id="clip0">
  <rect width="24" height="24" fill="white"/>
  </clipPath>
  </defs>
  </symbol>
  <symbol id="contact-info-parking-icon-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M12.6004 6H8.40039V18H10.8004V14.4H12.6004C14.8804 14.4 16.8004 12.48 16.8004 10.2C16.8004 7.92 14.8804 6 12.6004 6ZM12.6004 12H10.8004V8.4H12.6004C13.5604 8.4 14.4004 9.24 14.4004 10.2C14.4004 11.16 13.5604 12 12.6004 12Z"/>
  <path d="M20.4 0H3.6C1.56 0 0 1.56 0 3.6V20.4C0 22.44 1.56 24 3.6 24H20.4C22.44 24 24 22.44 24 20.4V3.6C24 1.56 22.44 0 20.4 0ZM21.6 20.4C21.6 21.12 21.12 21.6 20.4 21.6H3.6C2.88 21.6 2.4 21.12 2.4 20.4V3.6C2.4 2.88 2.88 2.4 3.6 2.4H20.4C21.12 2.4 21.6 2.88 21.6 3.6V20.4Z"/>
  </symbol>
  <symbol id="clock-circular-outline-svg" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
  <path d="M12 0C5.38309 0 0 5.38309 0 12C0 18.617 5.38309 24 12 24C18.617 24 24 18.6169 24 12C24 5.38309 18.617 0 12 0ZM12 21.3771C6.82936 21.3771 2.62295 17.1706 2.62295 12C2.62295 6.82962 6.82936 2.62295 12 2.62295C17.1706 2.62295 21.3771 6.82962 21.3771 12C21.3771 17.1706 17.1706 21.3771 12 21.3771Z"/>
  <path d="M13.0389 12.0144V6.98494C13.0389 6.42337 12.5839 5.96829 12.0225 5.96829C11.461 5.96829 11.0059 6.42337 11.0059 6.98494V12.3392C11.0059 12.3552 11.0098 12.3702 11.0106 12.3862C10.9972 12.6626 11.0924 12.9433 11.3036 13.1544L15.0898 16.9404C15.4869 17.3375 16.1306 17.3375 16.5274 16.9404C16.9243 16.5433 16.9245 15.8996 16.5274 15.5028L13.0389 12.0144Z"/>
  </symbol>
  <symbol id="fl-lft-arrow-svg" width="27" height="22" viewBox="0 0 27 22" xmlns="http://www.w3.org/2000/svg">
  <path d="M24.9982 8.92292L25.0396 8.93196H7.31561L12.8874 3.34792C13.1602 3.0753 13.3099 2.70599 13.3099 2.31837C13.3099 1.93076 13.1602 1.56403 12.8874 1.29076L12.0204 0.423363C11.7478 0.150739 11.3845 0 10.9971 0C10.6095 0 10.246 0.149663 9.97336 0.422286L0.422292 9.9725C0.148592 10.2462 -0.00107094 10.6108 5.76931e-06 10.9986C-0.00107094 11.3886 0.148592 11.7534 0.422292 12.0266L9.97336 21.5777C10.246 21.8501 10.6093 22 10.9971 22C11.3845 22 11.7478 21.8499 12.0204 21.5777L12.8874 20.7103C13.1602 20.4381 13.3099 20.0746 13.3099 19.687C13.3099 19.2996 13.1602 18.9553 12.8874 18.6829L7.25273 13.0676H25.018C25.8163 13.0676 26.4871 12.3796 26.4871 11.5817V10.3549C26.4871 9.5571 25.7965 8.92292 24.9982 8.92292Z"/>
  </symbol>
  <symbol id="fl-rgt-arrow-svg" width="27" height="22" viewBox="0 0 27 22" xmlns="http://www.w3.org/2000/svg">
  <path d="M1.48909 8.92292L1.44774 8.93196H19.1717L13.5999 3.34792C13.3271 3.0753 13.1774 2.70599 13.1774 2.31837C13.1774 1.93076 13.3271 1.56403 13.5999 1.29076L14.4669 0.423363C14.7395 0.150739 15.1028 0 15.4902 0C15.8778 0 16.2413 0.149663 16.5139 0.422286L26.065 9.9725C26.3387 10.2462 26.4884 10.6108 26.4873 10.9986C26.4884 11.3886 26.3387 11.7534 26.065 12.0266L16.5139 21.5777C16.2413 21.8501 15.878 22 15.4902 22C15.1028 22 14.7395 21.8499 14.4669 21.5777L13.5999 20.7103C13.3271 20.4381 13.1774 20.0746 13.1774 19.687C13.1774 19.2996 13.3271 18.9553 13.5999 18.6829L19.2346 13.0676H1.46927C0.671001 13.0676 0.000209808 12.3796 0.000209808 11.5817V10.3549C0.000209808 9.5571 0.690813 8.92292 1.48909 8.92292Z"/>
  </symbol>
  <symbol id="fl-pgntn-lft-arrow-svg" width="20" height="16" viewBox="0 0 20 16" xmlns="http://www.w3.org/2000/svg">
  <path d="M18.1308 6.4894L18.1608 6.49597H5.30591L9.34703 2.43485C9.54491 2.23658 9.65346 1.96799 9.65346 1.68609C9.65346 1.40419 9.54491 1.13748 9.34703 0.938735L8.71823 0.3079C8.5205 0.109629 8.25701 0 7.97604 0C7.69491 0 7.43127 0.108846 7.23354 0.307117L0.306282 7.25272C0.107772 7.45178 -0.000776739 7.71692 4.1844e-06 7.99898C-0.000776739 8.28261 0.107772 8.54791 0.306282 8.74665L7.23354 15.6929C7.43127 15.891 7.69475 16 7.97604 16C8.25701 16 8.5205 15.8908 8.71823 15.6929L9.34703 15.062C9.54491 14.8641 9.65346 14.5997 9.65346 14.3178C9.65346 14.0361 9.54491 13.7857 9.34703 13.5875L5.2603 9.50372H18.1452C18.7242 9.50372 19.2107 9.00334 19.2107 8.42309V7.53087C19.2107 6.95062 18.7098 6.4894 18.1308 6.4894Z"/>
  </symbol>
  <symbol id="fl-pgntn-rgt-arrow-svg" width="20" height="16" viewBox="0 0 20 16" xmlns="http://www.w3.org/2000/svg">
  <path d="M1.08009 6.4894L1.0501 6.49597H13.905L9.86391 2.43485C9.66603 2.23658 9.55748 1.96799 9.55748 1.68609C9.55748 1.40419 9.66603 1.13748 9.86391 0.938735L10.4927 0.3079C10.6904 0.109629 10.9539 0 11.2349 0C11.516 0 11.7797 0.108846 11.9774 0.307117L18.9047 7.25272C19.1032 7.45178 19.2117 7.71692 19.2109 7.99898C19.2117 8.28261 19.1032 8.54791 18.9047 8.74665L11.9774 15.6929C11.7797 15.891 11.5162 16 11.2349 16C10.9539 16 10.6904 15.8908 10.4927 15.6929L9.86391 15.062C9.66603 14.8641 9.55748 14.5997 9.55748 14.3178C9.55748 14.0361 9.66603 13.7857 9.86391 13.5875L13.9506 9.50372H1.06572C0.486744 9.50372 0.000228882 9.00334 0.000228882 8.42309V7.53087C0.000228882 6.95062 0.501114 6.4894 1.08009 6.4894Z"/>
  </symbol>
  <symbol id="np-arngmt-lft-arrow-svg" width="6" height="8" viewBox="0 0 6 8" xmlns="http://www.w3.org/2000/svg">
  <path d="M0.606555 0.000137755C0.488317 -0.00246282 0.372207 0.0318128 0.274366 0.0982521C0.176525 0.164691 0.101816 0.260011 0.0606254 0.370872C0.0194347 0.481734 0.0138091 0.602658 0.0445306 0.716865C0.0752521 0.831071 0.140794 0.932823 0.232045 1.00806L3.71377 3.9908L0.232045 6.97249C0.168922 7.01889 0.116058 7.07778 0.0767644 7.14555C0.0374702 7.21332 0.0125922 7.2885 0.00368797 7.36633C-0.00521629 7.44416 0.00204522 7.52297 0.0250177 7.59787C0.0479902 7.67276 0.0861785 7.74212 0.137192 7.80158C0.188205 7.86103 0.250944 7.90925 0.321479 7.94333C0.392015 7.97741 0.468827 7.99656 0.547107 7.99958C0.625386 8.0026 0.703446 7.98947 0.776397 7.96092C0.849349 7.93238 0.915621 7.88908 0.971064 7.83373L4.95732 4.42309C5.01992 4.36967 5.07019 4.30337 5.10466 4.22864C5.13912 4.15391 5.15697 4.07257 5.15697 3.99027C5.15697 3.90798 5.13912 3.82664 5.10466 3.75191C5.07019 3.67718 5.01992 3.61081 4.95732 3.55739L0.971064 0.14347C0.870365 0.0540263 0.741204 0.00317536 0.606555 6.49802e-06V0.000137755Z"/>
  </symbol>
</svg>
<div class="loading-screen">
  <img src="<?php echo THEME_URI; ?>/assets/images/logo-green.svg" alt="loading screen">
</div>
<?php 
  $logo_tag = '';
  $logoObj = get_field('hdlogo', 'options');
  $minderlogoObj = get_field('minder_hdlogo', 'options');
  if( is_default_page() == 'page-header' ){
    if( is_array($minderlogoObj) ){
      $logo_tag = '<img src="'.$minderlogoObj['url'].'" alt="'.$minderlogoObj['alt'].'" title="'.$minderlogoObj['title'].'">';
    }
  }else{
    if( is_array($logoObj) ){
      $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
    }
  }

  $is_top_text = get_field('blok_tonenverbergen_tekst', 'options');
  $fc_tekst = get_field('fc_tekst', 'options');
?>
<?php 
$posts1 = wp_count_posts(); 
?>
<div class="bdoverlay"></div>
<header class="header <?php echo is_default_page(); ?>" data-posts="<?php echo $posts1->publish; ?>">
  <?php if( $is_top_text && is_front_page() ): ?>
  <div class="hdr-top-notification-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hdr-top-notification">
            <?php if( !empty($fc_tekst) ) echo wpautop($fc_tekst); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr clearfix">
            <div class="xs-hamburger-btn show-md">
              <div class="line-icon">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div class="logo-cntlr">
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
            </div>
            <div class="hdr-topbar">
              <div>
                <div class="hdr-top-menu">
                  <?php 
                    $cbv_top_menu = array( 
                        'theme_location' => 'cbv_top_menu', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $cbv_top_menu );
                  ?>
                </div>
                <div class="hdr-language">
                 <ul class="reset-list">
                    <li>
                      <a href="#"><span>NL</span></a>
                    </li>
                    <li>
                      <a href="#"><span>FR</span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="main-nav-cntlr">
              <nav class="main-nav">
                <div class="hdr-lft-menu hdr-menu">
                  <?php 
                    $menuOptions1 = array( 
                        'theme_location' => 'cbv_main_menu1', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $menuOptions1 );
                  ?>
                </div>
                <div class="hdr-rgt-menu hdr-menu">
                  <?php 
                    $menuOptions2 = array( 
                        'theme_location' => 'cbv_main_menu2', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $menuOptions2 );
                  ?>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
  </div>
</header>
<?php
  $address = get_field('address', 'options');
  $gmurl = get_field('url', 'options');
  $telefoon = get_field('telefoon_1', 'options');
  $email = get_field('emailadres', 'options');
  $gmaplink = !empty($gmurl)?$gmurl: 'javascript:void()';

  $smedias = get_field('social_media', 'options');
  $qknop = get_field('quick_knop', 'options');
  $qvideo = get_field('fc_video_url', 'options');
?>
<div class="xs-nav-menu-cntlr show-md">
  <div class="xs-nav-menu-cntlr-inr">
    <div class="closebtn-wrp">
      <div class="closebtn">
        <span></span>
        <span></span>
      </div>
      <strong><?php _e( 'sluiten', THEME_NAME ); ?></strong>
    </div>
    <nav class="main-nav">
      <?php 
        $mobielmenuOptions = array( 
            'theme_location' => 'cbv_mobiel_menu', 
            'menu_class' => 'clearfix reset-list',
            'container' => '',
            'container_class' => ''
          );
        wp_nav_menu( $mobielmenuOptions );
      ?>
    </nav>
    <div class="xs-language">
      <ul class="reset-list clearfix">
        <li><a href="#"><span>NL</span></a></li>
        <li><a href="#"><span>NL</span></a></li>
      </ul>
    </div>
    <div class="xs-menu-address">
      <strong><?php _e( 'Adres', THEME_NAME ); ?></strong>
      <?php 
        if( !empty($address) ) printf('<a href="%s">%s</a>', $gmaplink, $address);
      ?>
    </div>
    <div class="xs-menu-quick-info">
      <div class="xs-tel-email">
        <ul class="reset-list clearfix">
          <?php if( !empty($telefoon) ): ?>
          <li><a href="tel:<?php echo phone_preg($telefoon); ?>"><i><img src="<?php echo THEME_URI; ?>/assets/images/tel-icon-xs.png"></i><?php echo $telefoon; ?></a></li>
          <?php endif; if( !empty($email) ):?>
          <li><a href="mailto:<?php echo $email; ?>"><i><img src="<?php echo THEME_URI; ?>/assets/images/mail-icon-xs.png"></i><?php echo $email; ?></a></li>
          <?php endif; ?>
        </ul>
      </div>
      <div class="xs-social">
        <?php if(!empty($smedias)):  ?>
        <ul class="reset-list">
          <?php foreach($smedias as $smedia): ?>
          <li><a target="_blank" href="<?php echo $smedia['url']; ?>"><?php echo $smedia['icon']; ?></a></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
    <div class="xs-menu-product">
      <div class="xs-menu-product-item inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/xs-menu-product-img.jpg);">
        <div>
          <h4>
          <?php
            if( is_array( $qknop ) &&  !empty( $qknop['url'] ) ){
              $qtitle = !empty($qknop['title'])? $qknop['title']:'De rijke geschiedenis van<br/>Grand Casino Knokke';
              printf('<a href="%s" target="%s">%s</a>', $qknop['url'], $qknop['target'], $qknop['title']); 
            }
          ?>
          </h4>
          <?php if( !empty( $qvideo ) ){ ?>
          <a href="<?php echo $qvideo; ?>" data-fancybox="gallery">BEKIJK DE VIDEO <i><img src="<?php echo THEME_URI; ?>/assets/images/xs-menu-link-arrow.png"></i></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  
</div>