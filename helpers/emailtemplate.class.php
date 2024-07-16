<?php


class emailtemplate
{
    function emailSignUp($first_name, $last_name, $email)
    {
        $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    
                    <head>
                      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                      <meta name="viewport" content="width=device-width">
                      <title>Study.Net - Study.Net Registration</title>
                    </head>
                    
                    <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                      <style>
                        @media only screen {
                          html {
                            min-height: 100%;
                            background: #f3f3f3;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .small-float-center {
                            margin: 0 auto !important;
                            float: none !important;
                            text-align: center !important;
                          }
                          .small-text-center {
                            text-align: center !important;
                          }
                          .small-text-left {
                            text-align: left !important;
                          }
                          .small-text-right {
                            text-align: right !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .hide-for-large {
                            display: block !important;
                            width: auto !important;
                            overflow: visible !important;
                            max-height: none !important;
                            font-size: inherit !important;
                            line-height: inherit !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .hide-for-large,
                          table.body table.container .row.hide-for-large {
                            display: table !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .callout-inner.hide-for-large {
                            display: table-cell !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .show-for-large {
                            display: none !important;
                            width: 0;
                            mso-hide: all;
                            overflow: hidden;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body img {
                            width: auto;
                            height: auto;
                          }
                          table.body center {
                            min-width: 0 !important;
                          }
                          table.body .container {
                            width: 95% !important;
                          }
                          table.body .columns,
                          table.body .column {
                            height: auto !important;
                            -moz-box-sizing: border-box;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            padding-left: 16px !important;
                            padding-right: 16px !important;
                          }
                          table.body .columns .column,
                          table.body .columns .columns,
                          table.body .column .column,
                          table.body .column .columns {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.body .collapse .columns,
                          table.body .collapse .column {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          td.small-1,
                          th.small-1 {
                            display: inline-block !important;
                            width: 8.33333% !important;
                          }
                          td.small-2,
                          th.small-2 {
                            display: inline-block !important;
                            width: 16.66667% !important;
                          }
                          td.small-3,
                          th.small-3 {
                            display: inline-block !important;
                            width: 25% !important;
                          }
                          td.small-4,
                          th.small-4 {
                            display: inline-block !important;
                            width: 33.33333% !important;
                          }
                          td.small-5,
                          th.small-5 {
                            display: inline-block !important;
                            width: 41.66667% !important;
                          }
                          td.small-6,
                          th.small-6 {
                            display: inline-block !important;
                            width: 50% !important;
                          }
                          td.small-7,
                          th.small-7 {
                            display: inline-block !important;
                            width: 58.33333% !important;
                          }
                          td.small-8,
                          th.small-8 {
                            display: inline-block !important;
                            width: 66.66667% !important;
                          }
                          td.small-9,
                          th.small-9 {
                            display: inline-block !important;
                            width: 75% !important;
                          }
                          td.small-10,
                          th.small-10 {
                            display: inline-block !important;
                            width: 83.33333% !important;
                          }
                          td.small-11,
                          th.small-11 {
                            display: inline-block !important;
                            width: 91.66667% !important;
                          }
                          td.small-12,
                          th.small-12 {
                            display: inline-block !important;
                            width: 100% !important;
                          }
                          .columns td.small-12,
                          .column td.small-12,
                          .columns th.small-12,
                          .column th.small-12 {
                            display: block !important;
                            width: 100% !important;
                          }
                          table.body td.small-offset-1,
                          table.body th.small-offset-1 {
                            margin-left: 8.33333% !important;
                            Margin-left: 8.33333% !important;
                          }
                          table.body td.small-offset-2,
                          table.body th.small-offset-2 {
                            margin-left: 16.66667% !important;
                            Margin-left: 16.66667% !important;
                          }
                          table.body td.small-offset-3,
                          table.body th.small-offset-3 {
                            margin-left: 25% !important;
                            Margin-left: 25% !important;
                          }
                          table.body td.small-offset-4,
                          table.body th.small-offset-4 {
                            margin-left: 33.33333% !important;
                            Margin-left: 33.33333% !important;
                          }
                          table.body td.small-offset-5,
                          table.body th.small-offset-5 {
                            margin-left: 41.66667% !important;
                            Margin-left: 41.66667% !important;
                          }
                          table.body td.small-offset-6,
                          table.body th.small-offset-6 {
                            margin-left: 50% !important;
                            Margin-left: 50% !important;
                          }
                          table.body td.small-offset-7,
                          table.body th.small-offset-7 {
                            margin-left: 58.33333% !important;
                            Margin-left: 58.33333% !important;
                          }
                          table.body td.small-offset-8,
                          table.body th.small-offset-8 {
                            margin-left: 66.66667% !important;
                            Margin-left: 66.66667% !important;
                          }
                          table.body td.small-offset-9,
                          table.body th.small-offset-9 {
                            margin-left: 75% !important;
                            Margin-left: 75% !important;
                          }
                          table.body td.small-offset-10,
                          table.body th.small-offset-10 {
                            margin-left: 83.33333% !important;
                            Margin-left: 83.33333% !important;
                          }
                          table.body td.small-offset-11,
                          table.body th.small-offset-11 {
                            margin-left: 91.66667% !important;
                            Margin-left: 91.66667% !important;
                          }
                          table.body table.columns td.expander,
                          table.body table.columns th.expander {
                            display: none !important;
                          }
                          table.body .right-text-pad,
                          table.body .text-pad-right {
                            padding-left: 10px !important;
                          }
                          table.body .left-text-pad,
                          table.body .text-pad-left {
                            padding-right: 10px !important;
                          }
                          table.menu {
                            width: 100% !important;
                          }
                          table.menu td,
                          table.menu th {
                            width: auto !important;
                            display: inline-block !important;
                          }
                          table.menu.vertical td,
                          table.menu.vertical th,
                          table.menu.small-vertical td,
                          table.menu.small-vertical th {
                            display: block !important;
                          }
                          table.menu[align="center"] {
                            width: auto !important;
                          }
                          table.button.small-expand,
                          table.button.small-expanded {
                            width: 100% !important;
                          }
                          table.button.small-expand table,
                          table.button.small-expanded table {
                            width: 100%;
                          }
                          table.button.small-expand table a,
                          table.button.small-expanded table a {
                            text-align: center !important;
                            width: 100% !important;
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.button.small-expand center,
                          table.button.small-expanded center {
                            min-width: 0;
                          }
                        }
                      </style>
                      <!-- <style> -->
                      <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                        <tbody>
                          <tr style="padding: 0; text-align: left; vertical-align: top;">
                            <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                              <center data-parsed="" style="min-width: 580px; width: 100%;">
                                <table bgcolor="#101010" align="center" class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table align="center" class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-6 large-6 columns first" valign="middle" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" width="150" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;">                                            </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="small-6 large-6 columns last" valign="middle" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                              </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                        <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi ' .$first_name.' ' .$last_name.',</h2>
                                                        <p class="lead" style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">You are now registered to use Study.Net. To change your user settings, please click the "Profile Info" link, located at the bottom of the Study.Net navigation side-bar.</p>
                                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                        <table class="callout" style="Margin-bottom: 16px; border-collapse: collapse; border-spacing: 0; margin-bottom: 16px; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th class="callout-inner success" style="Margin: 0; background-color: #ecf7f6; border: none; border-top: 6px solid #41aea4; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 16px; text-align: left; width: 100%;">
                                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                                  <tbody>
                                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                      <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                                        <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 6px; padding: 0; text-align: left;"><small style="font-size: 80%;">' . date("F d, Y - H:i:s") . ' GMT</small></p>
                                                                      </td>
                                                                    </tr>
                                                                  </tbody>
                                                                </table>
                    
                                                                <table style="border-collapse: collapse; border-spacing: 0; margin-top: 16px; padding: 0; text-align: left; vertical-align: top; width: 50%;">
                                                                  <tbody>
                                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                      <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; padding-bottom: 8px; text-align: left; vertical-align: top; word-wrap: break-word;"><small style="font-size: 80%; text-transform: uppercase;"><strong>Name</strong></small>:&nbsp;&nbsp;&nbsp;&nbsp;' . $first_name . ' '.$last_name.'</td></tr>
                                                                      <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                      <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; padding-bottom: 8px; text-align: left; vertical-align: top; word-wrap: break-word;"><small style="font-size: 80%; text-transform: uppercase;"><strong>Email</strong></small>:&nbsp;&nbsp;&nbsp;&nbsp;' . $email . '</td>
                                                                    </tr>
                                                                  </tbody>
                                                                </table>
                                                              </th>
                                                              <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </th>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="wrapper secondary" align="center" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                                <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                                  <tbody>
                                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                      <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                                    </tr>
                                                                  </tbody>
                                                                </table>
                                                                <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;"><small style="font-size: 80%;">&copy;' . date("Y") . ' Study.Net</small></p>
                                                                <p class="text-center" style="Margin: 0; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;"><a href="mailto:customerservice@study.net" style="Margin: 0; color: #2199e8; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: none;">customerservice@study.net</a></small></p>
                                                              </th>
                                                              <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </center>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    
                    </body>
                    
                    </html>';

        return $message;
    }

    //to create a template for role change requests in affiliations.
    function emailRoleChange($opted_role, $user_id, $rqst_type = 0)
    {
        $message = 'The ' . $user_id . '(User ID) has opted for role change to ' . $opted_role . '.';

        if ($rqst_type) {
            $message = 'The ' . $user_id . '(User ID) has cancelled role change request.';
        }
        return $message;
    }


    //to create a template for role change success or failure.
    function emailRoleChangeDecision($messageData)
    {

        $message = ' The  change of role that was requested to become ' . $messageData['usrType'] . ' at school
                   ' . $messageData['schName'] . '  has been ' . $messageData['apprvStatus'] . ' .';
        return $message;
    }


    function studApproved($messageData){

        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                        <html xmlns="http://www.w3.org/1999/xhtml">
                        
                        <head>
                          <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                          <meta name="viewport" content="width=device-width">
                          <title>Study.Net - Student Affiliation</title>
                        </head>
                        
                        <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                          <style>
                            @media only screen {
                              html {
                                min-height: 100%;
                                background: #f3f3f3;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              .small-float-center {
                                margin: 0 auto !important;
                                float: none !important;
                                text-align: center !important;
                              }
                              .small-text-center {
                                text-align: center !important;
                              }
                              .small-text-left {
                                text-align: left !important;
                              }
                              .small-text-right {
                                text-align: right !important;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              .hide-for-large {
                                display: block !important;
                                width: auto !important;
                                overflow: visible !important;
                                max-height: none !important;
                                font-size: inherit !important;
                                line-height: inherit !important;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              table.body table.container .hide-for-large,
                              table.body table.container .row.hide-for-large {
                                display: table !important;
                                width: 100% !important;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              table.body table.container .callout-inner.hide-for-large {
                                display: table-cell !important;
                                width: 100% !important;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              table.body table.container .show-for-large {
                                display: none !important;
                                width: 0;
                                mso-hide: all;
                                overflow: hidden;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              table.body img {
                                width: auto;
                                height: auto;
                              }
                              table.body center {
                                min-width: 0 !important;
                              }
                              table.body .container {
                                width: 95% !important;
                              }
                              table.body .columns,
                              table.body .column {
                                height: auto !important;
                                -moz-box-sizing: border-box;
                                -webkit-box-sizing: border-box;
                                box-sizing: border-box;
                                padding-left: 16px !important;
                                padding-right: 16px !important;
                              }
                              table.body .columns .column,
                              table.body .columns .columns,
                              table.body .column .column,
                              table.body .column .columns {
                                padding-left: 0 !important;
                                padding-right: 0 !important;
                              }
                              table.body .collapse .columns,
                              table.body .collapse .column {
                                padding-left: 0 !important;
                                padding-right: 0 !important;
                              }
                              td.small-1,
                              th.small-1 {
                                display: inline-block !important;
                                width: 8.33333% !important;
                              }
                              td.small-2,
                              th.small-2 {
                                display: inline-block !important;
                                width: 16.66667% !important;
                              }
                              td.small-3,
                              th.small-3 {
                                display: inline-block !important;
                                width: 25% !important;
                              }
                              td.small-4,
                              th.small-4 {
                                display: inline-block !important;
                                width: 33.33333% !important;
                              }
                              td.small-5,
                              th.small-5 {
                                display: inline-block !important;
                                width: 41.66667% !important;
                              }
                              td.small-6,
                              th.small-6 {
                                display: inline-block !important;
                                width: 50% !important;
                              }
                              td.small-7,
                              th.small-7 {
                                display: inline-block !important;
                                width: 58.33333% !important;
                              }
                              td.small-8,
                              th.small-8 {
                                display: inline-block !important;
                                width: 66.66667% !important;
                              }
                              td.small-9,
                              th.small-9 {
                                display: inline-block !important;
                                width: 75% !important;
                              }
                              td.small-10,
                              th.small-10 {
                                display: inline-block !important;
                                width: 83.33333% !important;
                              }
                              td.small-11,
                              th.small-11 {
                                display: inline-block !important;
                                width: 91.66667% !important;
                              }
                              td.small-12,
                              th.small-12 {
                                display: inline-block !important;
                                width: 100% !important;
                              }
                              .columns td.small-12,
                              .column td.small-12,
                              .columns th.small-12,
                              .column th.small-12 {
                                display: block !important;
                                width: 100% !important;
                              }
                              table.body td.small-offset-1,
                              table.body th.small-offset-1 {
                                margin-left: 8.33333% !important;
                                Margin-left: 8.33333% !important;
                              }
                              table.body td.small-offset-2,
                              table.body th.small-offset-2 {
                                margin-left: 16.66667% !important;
                                Margin-left: 16.66667% !important;
                              }
                              table.body td.small-offset-3,
                              table.body th.small-offset-3 {
                                margin-left: 25% !important;
                                Margin-left: 25% !important;
                              }
                              table.body td.small-offset-4,
                              table.body th.small-offset-4 {
                                margin-left: 33.33333% !important;
                                Margin-left: 33.33333% !important;
                              }
                              table.body td.small-offset-5,
                              table.body th.small-offset-5 {
                                margin-left: 41.66667% !important;
                                Margin-left: 41.66667% !important;
                              }
                              table.body td.small-offset-6,
                              table.body th.small-offset-6 {
                                margin-left: 50% !important;
                                Margin-left: 50% !important;
                              }
                              table.body td.small-offset-7,
                              table.body th.small-offset-7 {
                                margin-left: 58.33333% !important;
                                Margin-left: 58.33333% !important;
                              }
                              table.body td.small-offset-8,
                              table.body th.small-offset-8 {
                                margin-left: 66.66667% !important;
                                Margin-left: 66.66667% !important;
                              }
                              table.body td.small-offset-9,
                              table.body th.small-offset-9 {
                                margin-left: 75% !important;
                                Margin-left: 75% !important;
                              }
                              table.body td.small-offset-10,
                              table.body th.small-offset-10 {
                                margin-left: 83.33333% !important;
                                Margin-left: 83.33333% !important;
                              }
                              table.body td.small-offset-11,
                              table.body th.small-offset-11 {
                                margin-left: 91.66667% !important;
                                Margin-left: 91.66667% !important;
                              }
                              table.body table.columns td.expander,
                              table.body table.columns th.expander {
                                display: none !important;
                              }
                              table.body .right-text-pad,
                              table.body .text-pad-right {
                                padding-left: 10px !important;
                              }
                              table.body .left-text-pad,
                              table.body .text-pad-left {
                                padding-right: 10px !important;
                              }
                              table.menu {
                                width: 100% !important;
                              }
                              table.menu td,
                              table.menu th {
                                width: auto !important;
                                display: inline-block !important;
                              }
                              table.menu.vertical td,
                              table.menu.vertical th,
                              table.menu.small-vertical td,
                              table.menu.small-vertical th {
                                display: block !important;
                              }
                              table.menu[align="center"] {
                                width: auto !important;
                              }
                              table.button.small-expand,
                              table.button.small-expanded {
                                width: 100% !important;
                              }
                              table.button.small-expand table,
                              table.button.small-expanded table {
                                width: 100%;
                              }
                              table.button.small-expand table a,
                              table.button.small-expanded table a {
                                text-align: center !important;
                                width: 100% !important;
                                padding-left: 0 !important;
                                padding-right: 0 !important;
                              }
                              table.button.small-expand center,
                              table.button.small-expanded center {
                                min-width: 0;
                              }
                            }
                          </style>
                          <!-- <style> -->
                          <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                            <tbody>
                              <tr style="padding: 0; text-align: left; vertical-align: top;">
                                <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                                  <center data-parsed="" style="min-width: 580px; width: 100%;">
                        <table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                            <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                    <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </th>
                                                          <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                                    <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                                                  </th>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                            <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                            <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData["usrName"].',</h2>
                                                            <p style="Margin: 0; Margin-bottom: 16px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 16px; padding: 0; text-align: left;">
                                                              Your profile at Study.Net has been updated. You are now affiliated with <strong>' . $messageData["schName"] . '</strong> as a student. Please open the “Store” link to view all of the courses available to students with this affiliation.</p>
                                                            <p style="Margin: 0; Margin-bottom: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 0; padding: 0; text-align: left;">
                        If you have any questions, at any time, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.
                                                            </p>
                                                            <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </th>
                                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </th>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                        <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                    <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                                                    <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>                                          </th>
                                                                  <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </center>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        
                        </body>
                        
                        </html>';

        return $strBody;
    }

    function instApproved($messageData){

        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                        <html xmlns="http://www.w3.org/1999/xhtml">
                        
                        <head>
                          <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                          <meta name="viewport" content="width=device-width">
                          <title>Study.Net - Instructor Affiliation Approved</title>
                        </head>
                        
                        <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                          <style>
                            @media only screen {
                              html {
                                min-height: 100%;
                                background: #f3f3f3;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              .small-float-center {
                                margin: 0 auto !important;
                                float: none !important;
                                text-align: center !important;
                              }
                              .small-text-center {
                                text-align: center !important;
                              }
                              .small-text-left {
                                text-align: left !important;
                              }
                              .small-text-right {
                                text-align: right !important;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              .hide-for-large {
                                display: block !important;
                                width: auto !important;
                                overflow: visible !important;
                                max-height: none !important;
                                font-size: inherit !important;
                                line-height: inherit !important;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              table.body table.container .hide-for-large,
                              table.body table.container .row.hide-for-large {
                                display: table !important;
                                width: 100% !important;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              table.body table.container .callout-inner.hide-for-large {
                                display: table-cell !important;
                                width: 100% !important;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              table.body table.container .show-for-large {
                                display: none !important;
                                width: 0;
                                mso-hide: all;
                                overflow: hidden;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              table.body img {
                                width: auto;
                                height: auto;
                              }
                              table.body center {
                                min-width: 0 !important;
                              }
                              table.body .container {
                                width: 95% !important;
                              }
                              table.body .columns,
                              table.body .column {
                                height: auto !important;
                                -moz-box-sizing: border-box;
                                -webkit-box-sizing: border-box;
                                box-sizing: border-box;
                                padding-left: 16px !important;
                                padding-right: 16px !important;
                              }
                              table.body .columns .column,
                              table.body .columns .columns,
                              table.body .column .column,
                              table.body .column .columns {
                                padding-left: 0 !important;
                                padding-right: 0 !important;
                              }
                              table.body .collapse .columns,
                              table.body .collapse .column {
                                padding-left: 0 !important;
                                padding-right: 0 !important;
                              }
                              td.small-1,
                              th.small-1 {
                                display: inline-block !important;
                                width: 8.33333% !important;
                              }
                              td.small-2,
                              th.small-2 {
                                display: inline-block !important;
                                width: 16.66667% !important;
                              }
                              td.small-3,
                              th.small-3 {
                                display: inline-block !important;
                                width: 25% !important;
                              }
                              td.small-4,
                              th.small-4 {
                                display: inline-block !important;
                                width: 33.33333% !important;
                              }
                              td.small-5,
                              th.small-5 {
                                display: inline-block !important;
                                width: 41.66667% !important;
                              }
                              td.small-6,
                              th.small-6 {
                                display: inline-block !important;
                                width: 50% !important;
                              }
                              td.small-7,
                              th.small-7 {
                                display: inline-block !important;
                                width: 58.33333% !important;
                              }
                              td.small-8,
                              th.small-8 {
                                display: inline-block !important;
                                width: 66.66667% !important;
                              }
                              td.small-9,
                              th.small-9 {
                                display: inline-block !important;
                                width: 75% !important;
                              }
                              td.small-10,
                              th.small-10 {
                                display: inline-block !important;
                                width: 83.33333% !important;
                              }
                              td.small-11,
                              th.small-11 {
                                display: inline-block !important;
                                width: 91.66667% !important;
                              }
                              td.small-12,
                              th.small-12 {
                                display: inline-block !important;
                                width: 100% !important;
                              }
                              .columns td.small-12,
                              .column td.small-12,
                              .columns th.small-12,
                              .column th.small-12 {
                                display: block !important;
                                width: 100% !important;
                              }
                              table.body td.small-offset-1,
                              table.body th.small-offset-1 {
                                margin-left: 8.33333% !important;
                                Margin-left: 8.33333% !important;
                              }
                              table.body td.small-offset-2,
                              table.body th.small-offset-2 {
                                margin-left: 16.66667% !important;
                                Margin-left: 16.66667% !important;
                              }
                              table.body td.small-offset-3,
                              table.body th.small-offset-3 {
                                margin-left: 25% !important;
                                Margin-left: 25% !important;
                              }
                              table.body td.small-offset-4,
                              table.body th.small-offset-4 {
                                margin-left: 33.33333% !important;
                                Margin-left: 33.33333% !important;
                              }
                              table.body td.small-offset-5,
                              table.body th.small-offset-5 {
                                margin-left: 41.66667% !important;
                                Margin-left: 41.66667% !important;
                              }
                              table.body td.small-offset-6,
                              table.body th.small-offset-6 {
                                margin-left: 50% !important;
                                Margin-left: 50% !important;
                              }
                              table.body td.small-offset-7,
                              table.body th.small-offset-7 {
                                margin-left: 58.33333% !important;
                                Margin-left: 58.33333% !important;
                              }
                              table.body td.small-offset-8,
                              table.body th.small-offset-8 {
                                margin-left: 66.66667% !important;
                                Margin-left: 66.66667% !important;
                              }
                              table.body td.small-offset-9,
                              table.body th.small-offset-9 {
                                margin-left: 75% !important;
                                Margin-left: 75% !important;
                              }
                              table.body td.small-offset-10,
                              table.body th.small-offset-10 {
                                margin-left: 83.33333% !important;
                                Margin-left: 83.33333% !important;
                              }
                              table.body td.small-offset-11,
                              table.body th.small-offset-11 {
                                margin-left: 91.66667% !important;
                                Margin-left: 91.66667% !important;
                              }
                              table.body table.columns td.expander,
                              table.body table.columns th.expander {
                                display: none !important;
                              }
                              table.body .right-text-pad,
                              table.body .text-pad-right {
                                padding-left: 10px !important;
                              }
                              table.body .left-text-pad,
                              table.body .text-pad-left {
                                padding-right: 10px !important;
                              }
                              table.menu {
                                width: 100% !important;
                              }
                              table.menu td,
                              table.menu th {
                                width: auto !important;
                                display: inline-block !important;
                              }
                              table.menu.vertical td,
                              table.menu.vertical th,
                              table.menu.small-vertical td,
                              table.menu.small-vertical th {
                                display: block !important;
                              }
                              table.menu[align="center"] {
                                width: auto !important;
                              }
                              table.button.small-expand,
                              table.button.small-expanded {
                                width: 100% !important;
                              }
                              table.button.small-expand table,
                              table.button.small-expanded table {
                                width: 100%;
                              }
                              table.button.small-expand table a,
                              table.button.small-expanded table a {
                                text-align: center !important;
                                width: 100% !important;
                                padding-left: 0 !important;
                                padding-right: 0 !important;
                              }
                              table.button.small-expand center,
                              table.button.small-expanded center {
                                min-width: 0;
                              }
                            }
                          </style>
                          <!-- <style> -->
                          <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                            <tbody>
                              <tr style="padding: 0; text-align: left; vertical-align: top;">
                                <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                                  <center data-parsed="" style="min-width: 580px; width: 100%;">
                        <table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                            <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                    <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </th>
                                                          <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                                    <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                                                  </th>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                            <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                            <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData["usrName"].',</h2>
                         <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                              Your Study.Net request to be affiliated with <strong>' . $messageData["schName"] . '</strong> as a instructor has been approved.  You may now use Study.Net to assemble content bundles for direct deliver to students at <strong>' . $messageData["schName"] . '</strong>. </p>
                                                            <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                              A summary of the resources offered by Study.Net, and helpful hints on how to use them, can be found at: <a href="#">Study.Net Instructor Guide</a>. 
                        
                                                            </p>
                                                            <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                        If you have any questions, at any time, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.
                                                            </p>
                                                            <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </th>
                                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </th>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                        <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                    <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                                                    <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>
                                                                  </th>
                                                                  <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </center>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        
                        </body>
                        
                        </html>';

        return $strBody;
    }

    function instDeclined($messageData){
        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    
                    <head>
                      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                      <meta name="viewport" content="width=device-width">
                      <title>Study.Net -Instructor Affiliation Declined</title>
                    </head>
                    
                    <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                      <style>
                        @media only screen {
                          html {
                            min-height: 100%;
                            background: #f3f3f3;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .small-float-center {
                            margin: 0 auto !important;
                            float: none !important;
                            text-align: center !important;
                          }
                          .small-text-center {
                            text-align: center !important;
                          }
                          .small-text-left {
                            text-align: left !important;
                          }
                          .small-text-right {
                            text-align: right !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .hide-for-large {
                            display: block !important;
                            width: auto !important;
                            overflow: visible !important;
                            max-height: none !important;
                            font-size: inherit !important;
                            line-height: inherit !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .hide-for-large,
                          table.body table.container .row.hide-for-large {
                            display: table !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .callout-inner.hide-for-large {
                            display: table-cell !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .show-for-large {
                            display: none !important;
                            width: 0;
                            mso-hide: all;
                            overflow: hidden;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body img {
                            width: auto;
                            height: auto;
                          }
                          table.body center {
                            min-width: 0 !important;
                          }
                          table.body .container {
                            width: 95% !important;
                          }
                          table.body .columns,
                          table.body .column {
                            height: auto !important;
                            -moz-box-sizing: border-box;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            padding-left: 16px !important;
                            padding-right: 16px !important;
                          }
                          table.body .columns .column,
                          table.body .columns .columns,
                          table.body .column .column,
                          table.body .column .columns {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.body .collapse .columns,
                          table.body .collapse .column {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          td.small-1,
                          th.small-1 {
                            display: inline-block !important;
                            width: 8.33333% !important;
                          }
                          td.small-2,
                          th.small-2 {
                            display: inline-block !important;
                            width: 16.66667% !important;
                          }
                          td.small-3,
                          th.small-3 {
                            display: inline-block !important;
                            width: 25% !important;
                          }
                          td.small-4,
                          th.small-4 {
                            display: inline-block !important;
                            width: 33.33333% !important;
                          }
                          td.small-5,
                          th.small-5 {
                            display: inline-block !important;
                            width: 41.66667% !important;
                          }
                          td.small-6,
                          th.small-6 {
                            display: inline-block !important;
                            width: 50% !important;
                          }
                          td.small-7,
                          th.small-7 {
                            display: inline-block !important;
                            width: 58.33333% !important;
                          }
                          td.small-8,
                          th.small-8 {
                            display: inline-block !important;
                            width: 66.66667% !important;
                          }
                          td.small-9,
                          th.small-9 {
                            display: inline-block !important;
                            width: 75% !important;
                          }
                          td.small-10,
                          th.small-10 {
                            display: inline-block !important;
                            width: 83.33333% !important;
                          }
                          td.small-11,
                          th.small-11 {
                            display: inline-block !important;
                            width: 91.66667% !important;
                          }
                          td.small-12,
                          th.small-12 {
                            display: inline-block !important;
                            width: 100% !important;
                          }
                          .columns td.small-12,
                          .column td.small-12,
                          .columns th.small-12,
                          .column th.small-12 {
                            display: block !important;
                            width: 100% !important;
                          }
                          table.body td.small-offset-1,
                          table.body th.small-offset-1 {
                            margin-left: 8.33333% !important;
                            Margin-left: 8.33333% !important;
                          }
                          table.body td.small-offset-2,
                          table.body th.small-offset-2 {
                            margin-left: 16.66667% !important;
                            Margin-left: 16.66667% !important;
                          }
                          table.body td.small-offset-3,
                          table.body th.small-offset-3 {
                            margin-left: 25% !important;
                            Margin-left: 25% !important;
                          }
                          table.body td.small-offset-4,
                          table.body th.small-offset-4 {
                            margin-left: 33.33333% !important;
                            Margin-left: 33.33333% !important;
                          }
                          table.body td.small-offset-5,
                          table.body th.small-offset-5 {
                            margin-left: 41.66667% !important;
                            Margin-left: 41.66667% !important;
                          }
                          table.body td.small-offset-6,
                          table.body th.small-offset-6 {
                            margin-left: 50% !important;
                            Margin-left: 50% !important;
                          }
                          table.body td.small-offset-7,
                          table.body th.small-offset-7 {
                            margin-left: 58.33333% !important;
                            Margin-left: 58.33333% !important;
                          }
                          table.body td.small-offset-8,
                          table.body th.small-offset-8 {
                            margin-left: 66.66667% !important;
                            Margin-left: 66.66667% !important;
                          }
                          table.body td.small-offset-9,
                          table.body th.small-offset-9 {
                            margin-left: 75% !important;
                            Margin-left: 75% !important;
                          }
                          table.body td.small-offset-10,
                          table.body th.small-offset-10 {
                            margin-left: 83.33333% !important;
                            Margin-left: 83.33333% !important;
                          }
                          table.body td.small-offset-11,
                          table.body th.small-offset-11 {
                            margin-left: 91.66667% !important;
                            Margin-left: 91.66667% !important;
                          }
                          table.body table.columns td.expander,
                          table.body table.columns th.expander {
                            display: none !important;
                          }
                          table.body .right-text-pad,
                          table.body .text-pad-right {
                            padding-left: 10px !important;
                          }
                          table.body .left-text-pad,
                          table.body .text-pad-left {
                            padding-right: 10px !important;
                          }
                          table.menu {
                            width: 100% !important;
                          }
                          table.menu td,
                          table.menu th {
                            width: auto !important;
                            display: inline-block !important;
                          }
                          table.menu.vertical td,
                          table.menu.vertical th,
                          table.menu.small-vertical td,
                          table.menu.small-vertical th {
                            display: block !important;
                          }
                          table.menu[align="center"] {
                            width: auto !important;
                          }
                          table.button.small-expand,
                          table.button.small-expanded {
                            width: 100% !important;
                          }
                          table.button.small-expand table,
                          table.button.small-expanded table {
                            width: 100%;
                          }
                          table.button.small-expand table a,
                          table.button.small-expanded table a {
                            text-align: center !important;
                            width: 100% !important;
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.button.small-expand center,
                          table.button.small-expanded center {
                            min-width: 0;
                          }
                        }
                      </style>
                      <!-- <style> -->
                      <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                        <tbody>
                          <tr style="padding: 0; text-align: left; vertical-align: top;">
                            <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                              <center data-parsed="" style="min-width: 580px; width: 100%;">
                    <table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                                <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                                              </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                        <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData["usrName"].',</h2>
                     <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                    <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          Unfortunately, your Study.Net request to be affiliated with <strong>' . $messageData["schName"] . '</strong> as an instructor has NOT been approved, at this time.  This is usually the result when we are unable to confirm your instructor status at <strong>' . $messageData["schName"] . '</strong>.  </p>
                                                        <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          If you can help us resolve this issue, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.
                                                        </p>
                                                        <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                        Thank you.
                                                        </p>
                                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </th>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                    <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                                                <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>
                                                              </th>
                                                              <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </center>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    
                    </body>
                    
                    </html>';
        return $strBody;
    }

    function cordApproved($messageData){
        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    
                    <head>
                      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                      <meta name="viewport" content="width=device-width">
                      <title>Study.Net - Coordinator Affiliation Approved</title>
                    </head>
                    
                    <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                      <style>
                        @media only screen {
                          html {
                            min-height: 100%;
                            background: #f3f3f3;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .small-float-center {
                            margin: 0 auto !important;
                            float: none !important;
                            text-align: center !important;
                          }
                          .small-text-center {
                            text-align: center !important;
                          }
                          .small-text-left {
                            text-align: left !important;
                          }
                          .small-text-right {
                            text-align: right !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .hide-for-large {
                            display: block !important;
                            width: auto !important;
                            overflow: visible !important;
                            max-height: none !important;
                            font-size: inherit !important;
                            line-height: inherit !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .hide-for-large,
                          table.body table.container .row.hide-for-large {
                            display: table !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .callout-inner.hide-for-large {
                            display: table-cell !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .show-for-large {
                            display: none !important;
                            width: 0;
                            mso-hide: all;
                            overflow: hidden;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body img {
                            width: auto;
                            height: auto;
                          }
                          table.body center {
                            min-width: 0 !important;
                          }
                          table.body .container {
                            width: 95% !important;
                          }
                          table.body .columns,
                          table.body .column {
                            height: auto !important;
                            -moz-box-sizing: border-box;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            padding-left: 16px !important;
                            padding-right: 16px !important;
                          }
                          table.body .columns .column,
                          table.body .columns .columns,
                          table.body .column .column,
                          table.body .column .columns {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.body .collapse .columns,
                          table.body .collapse .column {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          td.small-1,
                          th.small-1 {
                            display: inline-block !important;
                            width: 8.33333% !important;
                          }
                          td.small-2,
                          th.small-2 {
                            display: inline-block !important;
                            width: 16.66667% !important;
                          }
                          td.small-3,
                          th.small-3 {
                            display: inline-block !important;
                            width: 25% !important;
                          }
                          td.small-4,
                          th.small-4 {
                            display: inline-block !important;
                            width: 33.33333% !important;
                          }
                          td.small-5,
                          th.small-5 {
                            display: inline-block !important;
                            width: 41.66667% !important;
                          }
                          td.small-6,
                          th.small-6 {
                            display: inline-block !important;
                            width: 50% !important;
                          }
                          td.small-7,
                          th.small-7 {
                            display: inline-block !important;
                            width: 58.33333% !important;
                          }
                          td.small-8,
                          th.small-8 {
                            display: inline-block !important;
                            width: 66.66667% !important;
                          }
                          td.small-9,
                          th.small-9 {
                            display: inline-block !important;
                            width: 75% !important;
                          }
                          td.small-10,
                          th.small-10 {
                            display: inline-block !important;
                            width: 83.33333% !important;
                          }
                          td.small-11,
                          th.small-11 {
                            display: inline-block !important;
                            width: 91.66667% !important;
                          }
                          td.small-12,
                          th.small-12 {
                            display: inline-block !important;
                            width: 100% !important;
                          }
                          .columns td.small-12,
                          .column td.small-12,
                          .columns th.small-12,
                          .column th.small-12 {
                            display: block !important;
                            width: 100% !important;
                          }
                          table.body td.small-offset-1,
                          table.body th.small-offset-1 {
                            margin-left: 8.33333% !important;
                            Margin-left: 8.33333% !important;
                          }
                          table.body td.small-offset-2,
                          table.body th.small-offset-2 {
                            margin-left: 16.66667% !important;
                            Margin-left: 16.66667% !important;
                          }
                          table.body td.small-offset-3,
                          table.body th.small-offset-3 {
                            margin-left: 25% !important;
                            Margin-left: 25% !important;
                          }
                          table.body td.small-offset-4,
                          table.body th.small-offset-4 {
                            margin-left: 33.33333% !important;
                            Margin-left: 33.33333% !important;
                          }
                          table.body td.small-offset-5,
                          table.body th.small-offset-5 {
                            margin-left: 41.66667% !important;
                            Margin-left: 41.66667% !important;
                          }
                          table.body td.small-offset-6,
                          table.body th.small-offset-6 {
                            margin-left: 50% !important;
                            Margin-left: 50% !important;
                          }
                          table.body td.small-offset-7,
                          table.body th.small-offset-7 {
                            margin-left: 58.33333% !important;
                            Margin-left: 58.33333% !important;
                          }
                          table.body td.small-offset-8,
                          table.body th.small-offset-8 {
                            margin-left: 66.66667% !important;
                            Margin-left: 66.66667% !important;
                          }
                          table.body td.small-offset-9,
                          table.body th.small-offset-9 {
                            margin-left: 75% !important;
                            Margin-left: 75% !important;
                          }
                          table.body td.small-offset-10,
                          table.body th.small-offset-10 {
                            margin-left: 83.33333% !important;
                            Margin-left: 83.33333% !important;
                          }
                          table.body td.small-offset-11,
                          table.body th.small-offset-11 {
                            margin-left: 91.66667% !important;
                            Margin-left: 91.66667% !important;
                          }
                          table.body table.columns td.expander,
                          table.body table.columns th.expander {
                            display: none !important;
                          }
                          table.body .right-text-pad,
                          table.body .text-pad-right {
                            padding-left: 10px !important;
                          }
                          table.body .left-text-pad,
                          table.body .text-pad-left {
                            padding-right: 10px !important;
                          }
                          table.menu {
                            width: 100% !important;
                          }
                          table.menu td,
                          table.menu th {
                            width: auto !important;
                            display: inline-block !important;
                          }
                          table.menu.vertical td,
                          table.menu.vertical th,
                          table.menu.small-vertical td,
                          table.menu.small-vertical th {
                            display: block !important;
                          }
                          table.menu[align="center"] {
                            width: auto !important;
                          }
                          table.button.small-expand,
                          table.button.small-expanded {
                            width: 100% !important;
                          }
                          table.button.small-expand table,
                          table.button.small-expanded table {
                            width: 100%;
                          }
                          table.button.small-expand table a,
                          table.button.small-expanded table a {
                            text-align: center !important;
                            width: 100% !important;
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.button.small-expand center,
                          table.button.small-expanded center {
                            min-width: 0;
                          }
                        }
                      </style>
                      <!-- <style> -->
                      <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                        <tbody>
                          <tr style="padding: 0; text-align: left; vertical-align: top;">
                            <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                              <center data-parsed="" style="min-width: 580px; width: 100%;">
                    <table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                                <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                                              </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                        <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData["usrName"].',</h2>
                     <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          Your Study.Net request to be affiliated with <strong>' . $messageData["schName"] . '</strong> as a coordinator has been approved.  You may now manage the accounts of all users – instructors and students –at <strong>' . $messageData["schName"] . '</strong>. </p>
                                                        <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          A summary of the resources offered by Study.Net, and helpful hints on how to use them, can be found at: <a href="#">Study.Net Coordinator Guide</a>. 
                    
                                                        </p>
                                                        <p style="Margin: 0; Margin-bottom: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 0; padding: 0; text-align: left;">
                    If you have any questions, at any time, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.
                                                        </p>
                                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </th>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                    <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                                                <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>                                          </th>
                                                              <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </center>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    
                    </body>
                    
                    </html>';

        return $strBody;
    }

    function cordDeclined($messageData){
        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                
                <head>
                  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                  <meta name="viewport" content="width=device-width">
                  <title>Study.Net - Coordinator Affiliation Declined</title>
                </head>
                
                <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                  <style>
                    @media only screen {
                      html {
                        min-height: 100%;
                        background: #f3f3f3;
                      }
                    }
                    
                    @media only screen and (max-width: 596px) {
                      .small-float-center {
                        margin: 0 auto !important;
                        float: none !important;
                        text-align: center !important;
                      }
                      .small-text-center {
                        text-align: center !important;
                      }
                      .small-text-left {
                        text-align: left !important;
                      }
                      .small-text-right {
                        text-align: right !important;
                      }
                    }
                    
                    @media only screen and (max-width: 596px) {
                      .hide-for-large {
                        display: block !important;
                        width: auto !important;
                        overflow: visible !important;
                        max-height: none !important;
                        font-size: inherit !important;
                        line-height: inherit !important;
                      }
                    }
                    
                    @media only screen and (max-width: 596px) {
                      table.body table.container .hide-for-large,
                      table.body table.container .row.hide-for-large {
                        display: table !important;
                        width: 100% !important;
                      }
                    }
                    
                    @media only screen and (max-width: 596px) {
                      table.body table.container .callout-inner.hide-for-large {
                        display: table-cell !important;
                        width: 100% !important;
                      }
                    }
                    
                    @media only screen and (max-width: 596px) {
                      table.body table.container .show-for-large {
                        display: none !important;
                        width: 0;
                        mso-hide: all;
                        overflow: hidden;
                      }
                    }
                    
                    @media only screen and (max-width: 596px) {
                      table.body img {
                        width: auto;
                        height: auto;
                      }
                      table.body center {
                        min-width: 0 !important;
                      }
                      table.body .container {
                        width: 95% !important;
                      }
                      table.body .columns,
                      table.body .column {
                        height: auto !important;
                        -moz-box-sizing: border-box;
                        -webkit-box-sizing: border-box;
                        box-sizing: border-box;
                        padding-left: 16px !important;
                        padding-right: 16px !important;
                      }
                      table.body .columns .column,
                      table.body .columns .columns,
                      table.body .column .column,
                      table.body .column .columns {
                        padding-left: 0 !important;
                        padding-right: 0 !important;
                      }
                      table.body .collapse .columns,
                      table.body .collapse .column {
                        padding-left: 0 !important;
                        padding-right: 0 !important;
                      }
                      td.small-1,
                      th.small-1 {
                        display: inline-block !important;
                        width: 8.33333% !important;
                      }
                      td.small-2,
                      th.small-2 {
                        display: inline-block !important;
                        width: 16.66667% !important;
                      }
                      td.small-3,
                      th.small-3 {
                        display: inline-block !important;
                        width: 25% !important;
                      }
                      td.small-4,
                      th.small-4 {
                        display: inline-block !important;
                        width: 33.33333% !important;
                      }
                      td.small-5,
                      th.small-5 {
                        display: inline-block !important;
                        width: 41.66667% !important;
                      }
                      td.small-6,
                      th.small-6 {
                        display: inline-block !important;
                        width: 50% !important;
                      }
                      td.small-7,
                      th.small-7 {
                        display: inline-block !important;
                        width: 58.33333% !important;
                      }
                      td.small-8,
                      th.small-8 {
                        display: inline-block !important;
                        width: 66.66667% !important;
                      }
                      td.small-9,
                      th.small-9 {
                        display: inline-block !important;
                        width: 75% !important;
                      }
                      td.small-10,
                      th.small-10 {
                        display: inline-block !important;
                        width: 83.33333% !important;
                      }
                      td.small-11,
                      th.small-11 {
                        display: inline-block !important;
                        width: 91.66667% !important;
                      }
                      td.small-12,
                      th.small-12 {
                        display: inline-block !important;
                        width: 100% !important;
                      }
                      .columns td.small-12,
                      .column td.small-12,
                      .columns th.small-12,
                      .column th.small-12 {
                        display: block !important;
                        width: 100% !important;
                      }
                      table.body td.small-offset-1,
                      table.body th.small-offset-1 {
                        margin-left: 8.33333% !important;
                        Margin-left: 8.33333% !important;
                      }
                      table.body td.small-offset-2,
                      table.body th.small-offset-2 {
                        margin-left: 16.66667% !important;
                        Margin-left: 16.66667% !important;
                      }
                      table.body td.small-offset-3,
                      table.body th.small-offset-3 {
                        margin-left: 25% !important;
                        Margin-left: 25% !important;
                      }
                      table.body td.small-offset-4,
                      table.body th.small-offset-4 {
                        margin-left: 33.33333% !important;
                        Margin-left: 33.33333% !important;
                      }
                      table.body td.small-offset-5,
                      table.body th.small-offset-5 {
                        margin-left: 41.66667% !important;
                        Margin-left: 41.66667% !important;
                      }
                      table.body td.small-offset-6,
                      table.body th.small-offset-6 {
                        margin-left: 50% !important;
                        Margin-left: 50% !important;
                      }
                      table.body td.small-offset-7,
                      table.body th.small-offset-7 {
                        margin-left: 58.33333% !important;
                        Margin-left: 58.33333% !important;
                      }
                      table.body td.small-offset-8,
                      table.body th.small-offset-8 {
                        margin-left: 66.66667% !important;
                        Margin-left: 66.66667% !important;
                      }
                      table.body td.small-offset-9,
                      table.body th.small-offset-9 {
                        margin-left: 75% !important;
                        Margin-left: 75% !important;
                      }
                      table.body td.small-offset-10,
                      table.body th.small-offset-10 {
                        margin-left: 83.33333% !important;
                        Margin-left: 83.33333% !important;
                      }
                      table.body td.small-offset-11,
                      table.body th.small-offset-11 {
                        margin-left: 91.66667% !important;
                        Margin-left: 91.66667% !important;
                      }
                      table.body table.columns td.expander,
                      table.body table.columns th.expander {
                        display: none !important;
                      }
                      table.body .right-text-pad,
                      table.body .text-pad-right {
                        padding-left: 10px !important;
                      }
                      table.body .left-text-pad,
                      table.body .text-pad-left {
                        padding-right: 10px !important;
                      }
                      table.menu {
                        width: 100% !important;
                      }
                      table.menu td,
                      table.menu th {
                        width: auto !important;
                        display: inline-block !important;
                      }
                      table.menu.vertical td,
                      table.menu.vertical th,
                      table.menu.small-vertical td,
                      table.menu.small-vertical th {
                        display: block !important;
                      }
                      table.menu[align="center"] {
                        width: auto !important;
                      }
                      table.button.small-expand,
                      table.button.small-expanded {
                        width: 100% !important;
                      }
                      table.button.small-expand table,
                      table.button.small-expanded table {
                        width: 100%;
                      }
                      table.button.small-expand table a,
                      table.button.small-expanded table a {
                        text-align: center !important;
                        width: 100% !important;
                        padding-left: 0 !important;
                        padding-right: 0 !important;
                      }
                      table.button.small-expand center,
                      table.button.small-expanded center {
                        min-width: 0;
                      }
                    }
                  </style>
                  <!-- <style> -->
                  <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                    <tbody>
                      <tr style="padding: 0; text-align: left; vertical-align: top;">
                        <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                          <center data-parsed="" style="min-width: 580px; width: 100%;">
                <table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                    <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                            <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </th>
                                                  <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                            <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                                          </th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </th>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                    <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData["usrName"].',</h2>
                <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                       Unfortunately, your Study.Net request to be affiliated with <strong>' . $messageData["schName"] . '</strong> as a coordinator has NOT been approved, at this time. This is usually the result when we are unable to confirm your coordinator status at <strong>' . $messageData["schName"] . '</strong>.  
                                                    </p>
                                                    <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                      If you can help us resolve this issue, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.
                                                    </p>
                                                    <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                       Thank you.
                                                    </p>
                                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </th>
                                                  <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                            <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                                            <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>
                                                          </th>
                                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </th>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </center>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                
                </body>
                
                </html>';

        return $strBody;
    }

    function schStudApproved($messageData){

        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                        <html xmlns="http://www.w3.org/1999/xhtml">
                        
                        <head>
                          <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                          <meta name="viewport" content="width=device-width">
                          <title>Study.Net - Coordinator Affiliation Approved</title>
                        </head>
                        
                        <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                          <style>
                            @media only screen {
                              html {
                                min-height: 100%;
                                background: #f3f3f3;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              .small-float-center {
                                margin: 0 auto !important;
                                float: none !important;
                                text-align: center !important;
                              }
                              .small-text-center {
                                text-align: center !important;
                              }
                              .small-text-left {
                                text-align: left !important;
                              }
                              .small-text-right {
                                text-align: right !important;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              .hide-for-large {
                                display: block !important;
                                width: auto !important;
                                overflow: visible !important;
                                max-height: none !important;
                                font-size: inherit !important;
                                line-height: inherit !important;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              table.body table.container .hide-for-large,
                              table.body table.container .row.hide-for-large {
                                display: table !important;
                                width: 100% !important;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              table.body table.container .callout-inner.hide-for-large {
                                display: table-cell !important;
                                width: 100% !important;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              table.body table.container .show-for-large {
                                display: none !important;
                                width: 0;
                                mso-hide: all;
                                overflow: hidden;
                              }
                            }
                            
                            @media only screen and (max-width: 596px) {
                              table.body img {
                                width: auto;
                                height: auto;
                              }
                              table.body center {
                                min-width: 0 !important;
                              }
                              table.body .container {
                                width: 95% !important;
                              }
                              table.body .columns,
                              table.body .column {
                                height: auto !important;
                                -moz-box-sizing: border-box;
                                -webkit-box-sizing: border-box;
                                box-sizing: border-box;
                                padding-left: 16px !important;
                                padding-right: 16px !important;
                              }
                              table.body .columns .column,
                              table.body .columns .columns,
                              table.body .column .column,
                              table.body .column .columns {
                                padding-left: 0 !important;
                                padding-right: 0 !important;
                              }
                              table.body .collapse .columns,
                              table.body .collapse .column {
                                padding-left: 0 !important;
                                padding-right: 0 !important;
                              }
                              td.small-1,
                              th.small-1 {
                                display: inline-block !important;
                                width: 8.33333% !important;
                              }
                              td.small-2,
                              th.small-2 {
                                display: inline-block !important;
                                width: 16.66667% !important;
                              }
                              td.small-3,
                              th.small-3 {
                                display: inline-block !important;
                                width: 25% !important;
                              }
                              td.small-4,
                              th.small-4 {
                                display: inline-block !important;
                                width: 33.33333% !important;
                              }
                              td.small-5,
                              th.small-5 {
                                display: inline-block !important;
                                width: 41.66667% !important;
                              }
                              td.small-6,
                              th.small-6 {
                                display: inline-block !important;
                                width: 50% !important;
                              }
                              td.small-7,
                              th.small-7 {
                                display: inline-block !important;
                                width: 58.33333% !important;
                              }
                              td.small-8,
                              th.small-8 {
                                display: inline-block !important;
                                width: 66.66667% !important;
                              }
                              td.small-9,
                              th.small-9 {
                                display: inline-block !important;
                                width: 75% !important;
                              }
                              td.small-10,
                              th.small-10 {
                                display: inline-block !important;
                                width: 83.33333% !important;
                              }
                              td.small-11,
                              th.small-11 {
                                display: inline-block !important;
                                width: 91.66667% !important;
                              }
                              td.small-12,
                              th.small-12 {
                                display: inline-block !important;
                                width: 100% !important;
                              }
                              .columns td.small-12,
                              .column td.small-12,
                              .columns th.small-12,
                              .column th.small-12 {
                                display: block !important;
                                width: 100% !important;
                              }
                              table.body td.small-offset-1,
                              table.body th.small-offset-1 {
                                margin-left: 8.33333% !important;
                                Margin-left: 8.33333% !important;
                              }
                              table.body td.small-offset-2,
                              table.body th.small-offset-2 {
                                margin-left: 16.66667% !important;
                                Margin-left: 16.66667% !important;
                              }
                              table.body td.small-offset-3,
                              table.body th.small-offset-3 {
                                margin-left: 25% !important;
                                Margin-left: 25% !important;
                              }
                              table.body td.small-offset-4,
                              table.body th.small-offset-4 {
                                margin-left: 33.33333% !important;
                                Margin-left: 33.33333% !important;
                              }
                              table.body td.small-offset-5,
                              table.body th.small-offset-5 {
                                margin-left: 41.66667% !important;
                                Margin-left: 41.66667% !important;
                              }
                              table.body td.small-offset-6,
                              table.body th.small-offset-6 {
                                margin-left: 50% !important;
                                Margin-left: 50% !important;
                              }
                              table.body td.small-offset-7,
                              table.body th.small-offset-7 {
                                margin-left: 58.33333% !important;
                                Margin-left: 58.33333% !important;
                              }
                              table.body td.small-offset-8,
                              table.body th.small-offset-8 {
                                margin-left: 66.66667% !important;
                                Margin-left: 66.66667% !important;
                              }
                              table.body td.small-offset-9,
                              table.body th.small-offset-9 {
                                margin-left: 75% !important;
                                Margin-left: 75% !important;
                              }
                              table.body td.small-offset-10,
                              table.body th.small-offset-10 {
                                margin-left: 83.33333% !important;
                                Margin-left: 83.33333% !important;
                              }
                              table.body td.small-offset-11,
                              table.body th.small-offset-11 {
                                margin-left: 91.66667% !important;
                                Margin-left: 91.66667% !important;
                              }
                              table.body table.columns td.expander,
                              table.body table.columns th.expander {
                                display: none !important;
                              }
                              table.body .right-text-pad,
                              table.body .text-pad-right {
                                padding-left: 10px !important;
                              }
                              table.body .left-text-pad,
                              table.body .text-pad-left {
                                padding-right: 10px !important;
                              }
                              table.menu {
                                width: 100% !important;
                              }
                              table.menu td,
                              table.menu th {
                                width: auto !important;
                                display: inline-block !important;
                              }
                              table.menu.vertical td,
                              table.menu.vertical th,
                              table.menu.small-vertical td,
                              table.menu.small-vertical th {
                                display: block !important;
                              }
                              table.menu[align="center"] {
                                width: auto !important;
                              }
                              table.button.small-expand,
                              table.button.small-expanded {
                                width: 100% !important;
                              }
                              table.button.small-expand table,
                              table.button.small-expanded table {
                                width: 100%;
                              }
                              table.button.small-expand table a,
                              table.button.small-expanded table a {
                                text-align: center !important;
                                width: 100% !important;
                                padding-left: 0 !important;
                                padding-right: 0 !important;
                              }
                              table.button.small-expand center,
                              table.button.small-expanded center {
                                min-width: 0;
                              }
                            }
                          </style>
                          <!-- <style> -->
                          <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                            <tbody>
                              <tr style="padding: 0; text-align: left; vertical-align: top;">
                                <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                                  <center data-parsed="" style="min-width: 580px; width: 100%;">
                        <table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                            <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                    <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </th>
                                                          <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                                    <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                                                  </th>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                            <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                            <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData["usrName"].',</h2>
                                                             <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                           Welcome to Study.Net.  You are now a registered student user at <strong>' . $messageData["schName"] . '</strong>.  You may now purchase (or otherwise access) content bundles available to students at <strong>' . $messageData["schName"] . '</strong>.  Please open the “Store” link to view all of the content bundles available to you.</p>
                                                            <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                              Please open “Profile Info” to change your password, add an affiliation, or request a change in your user role.
                                                            </p>
                                                            <p style="Margin: 0; Margin-bottom: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 0; padding: 0; text-align: left;">
                                                                If you have any questions, at any time, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.
                                                            </p>
                                                            <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </th>
                                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </th>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                        <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                    <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                                                    <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>                                          </th>
                                                                  <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </center>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        
                        </body>
                        
                        </html>';
        return $strBody;
    }

    function schInstApproved($messageData){

        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    
                    <head>
                      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                      <meta name="viewport" content="width=device-width">
                      <title>Study.Net - Coordinator Affiliation Approved</title>
                    </head>
                    
                    <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                      <style>
                        @media only screen {
                          html {
                            min-height: 100%;
                            background: #f3f3f3;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .small-float-center {
                            margin: 0 auto !important;
                            float: none !important;
                            text-align: center !important;
                          }
                          .small-text-center {
                            text-align: center !important;
                          }
                          .small-text-left {
                            text-align: left !important;
                          }
                          .small-text-right {
                            text-align: right !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .hide-for-large {
                            display: block !important;
                            width: auto !important;
                            overflow: visible !important;
                            max-height: none !important;
                            font-size: inherit !important;
                            line-height: inherit !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .hide-for-large,
                          table.body table.container .row.hide-for-large {
                            display: table !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .callout-inner.hide-for-large {
                            display: table-cell !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .show-for-large {
                            display: none !important;
                            width: 0;
                            mso-hide: all;
                            overflow: hidden;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body img {
                            width: auto;
                            height: auto;
                          }
                          table.body center {
                            min-width: 0 !important;
                          }
                          table.body .container {
                            width: 95% !important;
                          }
                          table.body .columns,
                          table.body .column {
                            height: auto !important;
                            -moz-box-sizing: border-box;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            padding-left: 16px !important;
                            padding-right: 16px !important;
                          }
                          table.body .columns .column,
                          table.body .columns .columns,
                          table.body .column .column,
                          table.body .column .columns {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.body .collapse .columns,
                          table.body .collapse .column {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          td.small-1,
                          th.small-1 {
                            display: inline-block !important;
                            width: 8.33333% !important;
                          }
                          td.small-2,
                          th.small-2 {
                            display: inline-block !important;
                            width: 16.66667% !important;
                          }
                          td.small-3,
                          th.small-3 {
                            display: inline-block !important;
                            width: 25% !important;
                          }
                          td.small-4,
                          th.small-4 {
                            display: inline-block !important;
                            width: 33.33333% !important;
                          }
                          td.small-5,
                          th.small-5 {
                            display: inline-block !important;
                            width: 41.66667% !important;
                          }
                          td.small-6,
                          th.small-6 {
                            display: inline-block !important;
                            width: 50% !important;
                          }
                          td.small-7,
                          th.small-7 {
                            display: inline-block !important;
                            width: 58.33333% !important;
                          }
                          td.small-8,
                          th.small-8 {
                            display: inline-block !important;
                            width: 66.66667% !important;
                          }
                          td.small-9,
                          th.small-9 {
                            display: inline-block !important;
                            width: 75% !important;
                          }
                          td.small-10,
                          th.small-10 {
                            display: inline-block !important;
                            width: 83.33333% !important;
                          }
                          td.small-11,
                          th.small-11 {
                            display: inline-block !important;
                            width: 91.66667% !important;
                          }
                          td.small-12,
                          th.small-12 {
                            display: inline-block !important;
                            width: 100% !important;
                          }
                          .columns td.small-12,
                          .column td.small-12,
                          .columns th.small-12,
                          .column th.small-12 {
                            display: block !important;
                            width: 100% !important;
                          }
                          table.body td.small-offset-1,
                          table.body th.small-offset-1 {
                            margin-left: 8.33333% !important;
                            Margin-left: 8.33333% !important;
                          }
                          table.body td.small-offset-2,
                          table.body th.small-offset-2 {
                            margin-left: 16.66667% !important;
                            Margin-left: 16.66667% !important;
                          }
                          table.body td.small-offset-3,
                          table.body th.small-offset-3 {
                            margin-left: 25% !important;
                            Margin-left: 25% !important;
                          }
                          table.body td.small-offset-4,
                          table.body th.small-offset-4 {
                            margin-left: 33.33333% !important;
                            Margin-left: 33.33333% !important;
                          }
                          table.body td.small-offset-5,
                          table.body th.small-offset-5 {
                            margin-left: 41.66667% !important;
                            Margin-left: 41.66667% !important;
                          }
                          table.body td.small-offset-6,
                          table.body th.small-offset-6 {
                            margin-left: 50% !important;
                            Margin-left: 50% !important;
                          }
                          table.body td.small-offset-7,
                          table.body th.small-offset-7 {
                            margin-left: 58.33333% !important;
                            Margin-left: 58.33333% !important;
                          }
                          table.body td.small-offset-8,
                          table.body th.small-offset-8 {
                            margin-left: 66.66667% !important;
                            Margin-left: 66.66667% !important;
                          }
                          table.body td.small-offset-9,
                          table.body th.small-offset-9 {
                            margin-left: 75% !important;
                            Margin-left: 75% !important;
                          }
                          table.body td.small-offset-10,
                          table.body th.small-offset-10 {
                            margin-left: 83.33333% !important;
                            Margin-left: 83.33333% !important;
                          }
                          table.body td.small-offset-11,
                          table.body th.small-offset-11 {
                            margin-left: 91.66667% !important;
                            Margin-left: 91.66667% !important;
                          }
                          table.body table.columns td.expander,
                          table.body table.columns th.expander {
                            display: none !important;
                          }
                          table.body .right-text-pad,
                          table.body .text-pad-right {
                            padding-left: 10px !important;
                          }
                          table.body .left-text-pad,
                          table.body .text-pad-left {
                            padding-right: 10px !important;
                          }
                          table.menu {
                            width: 100% !important;
                          }
                          table.menu td,
                          table.menu th {
                            width: auto !important;
                            display: inline-block !important;
                          }
                          table.menu.vertical td,
                          table.menu.vertical th,
                          table.menu.small-vertical td,
                          table.menu.small-vertical th {
                            display: block !important;
                          }
                          table.menu[align="center"] {
                            width: auto !important;
                          }
                          table.button.small-expand,
                          table.button.small-expanded {
                            width: 100% !important;
                          }
                          table.button.small-expand table,
                          table.button.small-expanded table {
                            width: 100%;
                          }
                          table.button.small-expand table a,
                          table.button.small-expanded table a {
                            text-align: center !important;
                            width: 100% !important;
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.button.small-expand center,
                          table.button.small-expanded center {
                            min-width: 0;
                          }
                        }
                      </style>
                      <!-- <style> -->
                      <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                        <tbody>
                          <tr style="padding: 0; text-align: left; vertical-align: top;">
                            <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                              <center data-parsed="" style="min-width: 580px; width: 100%;">
                    <table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                                <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                                              </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                        <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData["usrName"].',</h2>
                                                         <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                         Welcome to Study.Net.  You are now registered as an Instructor at <strong>' . $messageData["schName"] . '</strong>.  You may now use Study.Net to assemble content bundles for direct digital delivery to students at <strong>' . $messageData["schName"] . '</strong>. </p>
                                                        <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          A summary of the coordinator resources offered by Study.Net, and helpful hints on how to use them, can be found at: <a href="#">Study.Net Instructor Guide</a>.   
                                                        </p>
                                                        <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          Please open “Profile Info” to change your password, add an affiliation, or request a change in your user role.
                                                        </p>
                                                        <p style="Margin: 0; Margin-bottom: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 0; padding: 0; text-align: left;">
                                                            If you have any questions, at any time, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.
                                                        </p>
                                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </th>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                    <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                                                <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>                                          </th>
                                                              <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </center>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    
                    </body>
                    
                    </html>';
        return $strBody;
    }

    function schCordApproved($messageData){

        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    
                    <head>
                      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                      <meta name="viewport" content="width=device-width">
                      <title>Study.Net - Coordinator Affiliation Approved</title>
                    </head>
                    
                    <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                      <style>
                        @media only screen {
                          html {
                            min-height: 100%;
                            background: #f3f3f3;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .small-float-center {
                            margin: 0 auto !important;
                            float: none !important;
                            text-align: center !important;
                          }
                          .small-text-center {
                            text-align: center !important;
                          }
                          .small-text-left {
                            text-align: left !important;
                          }
                          .small-text-right {
                            text-align: right !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .hide-for-large {
                            display: block !important;
                            width: auto !important;
                            overflow: visible !important;
                            max-height: none !important;
                            font-size: inherit !important;
                            line-height: inherit !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .hide-for-large,
                          table.body table.container .row.hide-for-large {
                            display: table !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .callout-inner.hide-for-large {
                            display: table-cell !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .show-for-large {
                            display: none !important;
                            width: 0;
                            mso-hide: all;
                            overflow: hidden;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body img {
                            width: auto;
                            height: auto;
                          }
                          table.body center {
                            min-width: 0 !important;
                          }
                          table.body .container {
                            width: 95% !important;
                          }
                          table.body .columns,
                          table.body .column {
                            height: auto !important;
                            -moz-box-sizing: border-box;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            padding-left: 16px !important;
                            padding-right: 16px !important;
                          }
                          table.body .columns .column,
                          table.body .columns .columns,
                          table.body .column .column,
                          table.body .column .columns {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.body .collapse .columns,
                          table.body .collapse .column {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          td.small-1,
                          th.small-1 {
                            display: inline-block !important;
                            width: 8.33333% !important;
                          }
                          td.small-2,
                          th.small-2 {
                            display: inline-block !important;
                            width: 16.66667% !important;
                          }
                          td.small-3,
                          th.small-3 {
                            display: inline-block !important;
                            width: 25% !important;
                          }
                          td.small-4,
                          th.small-4 {
                            display: inline-block !important;
                            width: 33.33333% !important;
                          }
                          td.small-5,
                          th.small-5 {
                            display: inline-block !important;
                            width: 41.66667% !important;
                          }
                          td.small-6,
                          th.small-6 {
                            display: inline-block !important;
                            width: 50% !important;
                          }
                          td.small-7,
                          th.small-7 {
                            display: inline-block !important;
                            width: 58.33333% !important;
                          }
                          td.small-8,
                          th.small-8 {
                            display: inline-block !important;
                            width: 66.66667% !important;
                          }
                          td.small-9,
                          th.small-9 {
                            display: inline-block !important;
                            width: 75% !important;
                          }
                          td.small-10,
                          th.small-10 {
                            display: inline-block !important;
                            width: 83.33333% !important;
                          }
                          td.small-11,
                          th.small-11 {
                            display: inline-block !important;
                            width: 91.66667% !important;
                          }
                          td.small-12,
                          th.small-12 {
                            display: inline-block !important;
                            width: 100% !important;
                          }
                          .columns td.small-12,
                          .column td.small-12,
                          .columns th.small-12,
                          .column th.small-12 {
                            display: block !important;
                            width: 100% !important;
                          }
                          table.body td.small-offset-1,
                          table.body th.small-offset-1 {
                            margin-left: 8.33333% !important;
                            Margin-left: 8.33333% !important;
                          }
                          table.body td.small-offset-2,
                          table.body th.small-offset-2 {
                            margin-left: 16.66667% !important;
                            Margin-left: 16.66667% !important;
                          }
                          table.body td.small-offset-3,
                          table.body th.small-offset-3 {
                            margin-left: 25% !important;
                            Margin-left: 25% !important;
                          }
                          table.body td.small-offset-4,
                          table.body th.small-offset-4 {
                            margin-left: 33.33333% !important;
                            Margin-left: 33.33333% !important;
                          }
                          table.body td.small-offset-5,
                          table.body th.small-offset-5 {
                            margin-left: 41.66667% !important;
                            Margin-left: 41.66667% !important;
                          }
                          table.body td.small-offset-6,
                          table.body th.small-offset-6 {
                            margin-left: 50% !important;
                            Margin-left: 50% !important;
                          }
                          table.body td.small-offset-7,
                          table.body th.small-offset-7 {
                            margin-left: 58.33333% !important;
                            Margin-left: 58.33333% !important;
                          }
                          table.body td.small-offset-8,
                          table.body th.small-offset-8 {
                            margin-left: 66.66667% !important;
                            Margin-left: 66.66667% !important;
                          }
                          table.body td.small-offset-9,
                          table.body th.small-offset-9 {
                            margin-left: 75% !important;
                            Margin-left: 75% !important;
                          }
                          table.body td.small-offset-10,
                          table.body th.small-offset-10 {
                            margin-left: 83.33333% !important;
                            Margin-left: 83.33333% !important;
                          }
                          table.body td.small-offset-11,
                          table.body th.small-offset-11 {
                            margin-left: 91.66667% !important;
                            Margin-left: 91.66667% !important;
                          }
                          table.body table.columns td.expander,
                          table.body table.columns th.expander {
                            display: none !important;
                          }
                          table.body .right-text-pad,
                          table.body .text-pad-right {
                            padding-left: 10px !important;
                          }
                          table.body .left-text-pad,
                          table.body .text-pad-left {
                            padding-right: 10px !important;
                          }
                          table.menu {
                            width: 100% !important;
                          }
                          table.menu td,
                          table.menu th {
                            width: auto !important;
                            display: inline-block !important;
                          }
                          table.menu.vertical td,
                          table.menu.vertical th,
                          table.menu.small-vertical td,
                          table.menu.small-vertical th {
                            display: block !important;
                          }
                          table.menu[align="center"] {
                            width: auto !important;
                          }
                          table.button.small-expand,
                          table.button.small-expanded {
                            width: 100% !important;
                          }
                          table.button.small-expand table,
                          table.button.small-expanded table {
                            width: 100%;
                          }
                          table.button.small-expand table a,
                          table.button.small-expanded table a {
                            text-align: center !important;
                            width: 100% !important;
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.button.small-expand center,
                          table.button.small-expanded center {
                            min-width: 0;
                          }
                        }
                      </style>
                      <!-- <style> -->
                      <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                        <tbody>
                          <tr style="padding: 0; text-align: left; vertical-align: top;">
                            <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                              <center data-parsed="" style="min-width: 580px; width: 100%;">
                    <table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                                <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                                              </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                        <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData["usrName"].',</h2>
                                                         <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                         Welcome to Study.Net.  You are now registered as a coordinator at <strong>' . $messageData["schName"] . '</strong>.  You may now manage the accounts of all users – instructors and students –at <strong>' . $messageData["schName"] . '</strong>. </p>
                                                        <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          A summary of the coordinator resources offered by Study.Net, and helpful hints on how to use them, can be found at: <a href="#">Study.Net Coordinator Guide</a>.   
                                                        </p>
                                                        <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          Please open “Profile Info” to change your password, add an affiliation, or request a change in your user role.
                                                        </p>
                                                        <p style="Margin: 0; Margin-bottom: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 0; padding: 0; text-align: left;">
                                                            If you have any questions, at any time, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.
                                                        </p>
                                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </th>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                    <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                                                <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>                                          </th>
                                                              <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </center>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    
                    </body>
                    
                    </html>';
        return $strBody;
    }

    function schInstDeclined($messageData){

        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    
                    <head>
                      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                      <meta name="viewport" content="width=device-width">
                      <title>Study.Net - Coordinator Affiliation Approved</title>
                    </head>
                    
                    <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                      <style>
                        @media only screen {
                          html {
                            min-height: 100%;
                            background: #f3f3f3;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .small-float-center {
                            margin: 0 auto !important;
                            float: none !important;
                            text-align: center !important;
                          }
                          .small-text-center {
                            text-align: center !important;
                          }
                          .small-text-left {
                            text-align: left !important;
                          }
                          .small-text-right {
                            text-align: right !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .hide-for-large {
                            display: block !important;
                            width: auto !important;
                            overflow: visible !important;
                            max-height: none !important;
                            font-size: inherit !important;
                            line-height: inherit !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .hide-for-large,
                          table.body table.container .row.hide-for-large {
                            display: table !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .callout-inner.hide-for-large {
                            display: table-cell !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .show-for-large {
                            display: none !important;
                            width: 0;
                            mso-hide: all;
                            overflow: hidden;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body img {
                            width: auto;
                            height: auto;
                          }
                          table.body center {
                            min-width: 0 !important;
                          }
                          table.body .container {
                            width: 95% !important;
                          }
                          table.body .columns,
                          table.body .column {
                            height: auto !important;
                            -moz-box-sizing: border-box;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            padding-left: 16px !important;
                            padding-right: 16px !important;
                          }
                          table.body .columns .column,
                          table.body .columns .columns,
                          table.body .column .column,
                          table.body .column .columns {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.body .collapse .columns,
                          table.body .collapse .column {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          td.small-1,
                          th.small-1 {
                            display: inline-block !important;
                            width: 8.33333% !important;
                          }
                          td.small-2,
                          th.small-2 {
                            display: inline-block !important;
                            width: 16.66667% !important;
                          }
                          td.small-3,
                          th.small-3 {
                            display: inline-block !important;
                            width: 25% !important;
                          }
                          td.small-4,
                          th.small-4 {
                            display: inline-block !important;
                            width: 33.33333% !important;
                          }
                          td.small-5,
                          th.small-5 {
                            display: inline-block !important;
                            width: 41.66667% !important;
                          }
                          td.small-6,
                          th.small-6 {
                            display: inline-block !important;
                            width: 50% !important;
                          }
                          td.small-7,
                          th.small-7 {
                            display: inline-block !important;
                            width: 58.33333% !important;
                          }
                          td.small-8,
                          th.small-8 {
                            display: inline-block !important;
                            width: 66.66667% !important;
                          }
                          td.small-9,
                          th.small-9 {
                            display: inline-block !important;
                            width: 75% !important;
                          }
                          td.small-10,
                          th.small-10 {
                            display: inline-block !important;
                            width: 83.33333% !important;
                          }
                          td.small-11,
                          th.small-11 {
                            display: inline-block !important;
                            width: 91.66667% !important;
                          }
                          td.small-12,
                          th.small-12 {
                            display: inline-block !important;
                            width: 100% !important;
                          }
                          .columns td.small-12,
                          .column td.small-12,
                          .columns th.small-12,
                          .column th.small-12 {
                            display: block !important;
                            width: 100% !important;
                          }
                          table.body td.small-offset-1,
                          table.body th.small-offset-1 {
                            margin-left: 8.33333% !important;
                            Margin-left: 8.33333% !important;
                          }
                          table.body td.small-offset-2,
                          table.body th.small-offset-2 {
                            margin-left: 16.66667% !important;
                            Margin-left: 16.66667% !important;
                          }
                          table.body td.small-offset-3,
                          table.body th.small-offset-3 {
                            margin-left: 25% !important;
                            Margin-left: 25% !important;
                          }
                          table.body td.small-offset-4,
                          table.body th.small-offset-4 {
                            margin-left: 33.33333% !important;
                            Margin-left: 33.33333% !important;
                          }
                          table.body td.small-offset-5,
                          table.body th.small-offset-5 {
                            margin-left: 41.66667% !important;
                            Margin-left: 41.66667% !important;
                          }
                          table.body td.small-offset-6,
                          table.body th.small-offset-6 {
                            margin-left: 50% !important;
                            Margin-left: 50% !important;
                          }
                          table.body td.small-offset-7,
                          table.body th.small-offset-7 {
                            margin-left: 58.33333% !important;
                            Margin-left: 58.33333% !important;
                          }
                          table.body td.small-offset-8,
                          table.body th.small-offset-8 {
                            margin-left: 66.66667% !important;
                            Margin-left: 66.66667% !important;
                          }
                          table.body td.small-offset-9,
                          table.body th.small-offset-9 {
                            margin-left: 75% !important;
                            Margin-left: 75% !important;
                          }
                          table.body td.small-offset-10,
                          table.body th.small-offset-10 {
                            margin-left: 83.33333% !important;
                            Margin-left: 83.33333% !important;
                          }
                          table.body td.small-offset-11,
                          table.body th.small-offset-11 {
                            margin-left: 91.66667% !important;
                            Margin-left: 91.66667% !important;
                          }
                          table.body table.columns td.expander,
                          table.body table.columns th.expander {
                            display: none !important;
                          }
                          table.body .right-text-pad,
                          table.body .text-pad-right {
                            padding-left: 10px !important;
                          }
                          table.body .left-text-pad,
                          table.body .text-pad-left {
                            padding-right: 10px !important;
                          }
                          table.menu {
                            width: 100% !important;
                          }
                          table.menu td,
                          table.menu th {
                            width: auto !important;
                            display: inline-block !important;
                          }
                          table.menu.vertical td,
                          table.menu.vertical th,
                          table.menu.small-vertical td,
                          table.menu.small-vertical th {
                            display: block !important;
                          }
                          table.menu[align="center"] {
                            width: auto !important;
                          }
                          table.button.small-expand,
                          table.button.small-expanded {
                            width: 100% !important;
                          }
                          table.button.small-expand table,
                          table.button.small-expanded table {
                            width: 100%;
                          }
                          table.button.small-expand table a,
                          table.button.small-expanded table a {
                            text-align: center !important;
                            width: 100% !important;
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.button.small-expand center,
                          table.button.small-expanded center {
                            min-width: 0;
                          }
                        }
                      </style>
                      <!-- <style> -->
                      <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                        <tbody>
                          <tr style="padding: 0; text-align: left; vertical-align: top;">
                            <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                              <center data-parsed="" style="min-width: 580px; width: 100%;">
                    <table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                                <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                                              </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                        <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData["usrName"].',</h2>
                                                         <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          Welcome to Study.Net.  Unfortunately, your request to be affiliated with <strong>' . $messageData["schName"] . '</strong> as an instructor has been denied at this time.  This is usually the result when we are unable to confirm your instructor status at <strong>' . $messageData["schName"] . '</strong>. </p>
                                                        <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          Until we are able to confirm your instructor status, you have been registered as a student user at <strong>' . $messageData["schName"] . '</strong>.  
                                                        </p>
                                                        <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          Please open “Profile Info” to change your password, add an affiliation, or request a change in your user role.
                                                        </p>
                                                        <p style="Margin: 0; Margin-bottom: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 0; padding: 0; text-align: left;">
                                                            If you can help resolve this issue, please send us a message at: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.  Thank you.
                                                        </p>
                                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </th>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                    <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                                                <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>                                          </th>
                                                              <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </center>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    
                    </body>
                    
                    </html>';

        return $strBody;
    }

    function schCordDeclined($messageData){
        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    
                    <head>
                      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                      <meta name="viewport" content="width=device-width">
                      <title>Study.Net - Coordinator Affiliation Approved</title>
                    </head>
                    
                    <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                      <style>
                        @media only screen {
                          html {
                            min-height: 100%;
                            background: #f3f3f3;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .small-float-center {
                            margin: 0 auto !important;
                            float: none !important;
                            text-align: center !important;
                          }
                          .small-text-center {
                            text-align: center !important;
                          }
                          .small-text-left {
                            text-align: left !important;
                          }
                          .small-text-right {
                            text-align: right !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .hide-for-large {
                            display: block !important;
                            width: auto !important;
                            overflow: visible !important;
                            max-height: none !important;
                            font-size: inherit !important;
                            line-height: inherit !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .hide-for-large,
                          table.body table.container .row.hide-for-large {
                            display: table !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .callout-inner.hide-for-large {
                            display: table-cell !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .show-for-large {
                            display: none !important;
                            width: 0;
                            mso-hide: all;
                            overflow: hidden;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body img {
                            width: auto;
                            height: auto;
                          }
                          table.body center {
                            min-width: 0 !important;
                          }
                          table.body .container {
                            width: 95% !important;
                          }
                          table.body .columns,
                          table.body .column {
                            height: auto !important;
                            -moz-box-sizing: border-box;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            padding-left: 16px !important;
                            padding-right: 16px !important;
                          }
                          table.body .columns .column,
                          table.body .columns .columns,
                          table.body .column .column,
                          table.body .column .columns {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.body .collapse .columns,
                          table.body .collapse .column {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          td.small-1,
                          th.small-1 {
                            display: inline-block !important;
                            width: 8.33333% !important;
                          }
                          td.small-2,
                          th.small-2 {
                            display: inline-block !important;
                            width: 16.66667% !important;
                          }
                          td.small-3,
                          th.small-3 {
                            display: inline-block !important;
                            width: 25% !important;
                          }
                          td.small-4,
                          th.small-4 {
                            display: inline-block !important;
                            width: 33.33333% !important;
                          }
                          td.small-5,
                          th.small-5 {
                            display: inline-block !important;
                            width: 41.66667% !important;
                          }
                          td.small-6,
                          th.small-6 {
                            display: inline-block !important;
                            width: 50% !important;
                          }
                          td.small-7,
                          th.small-7 {
                            display: inline-block !important;
                            width: 58.33333% !important;
                          }
                          td.small-8,
                          th.small-8 {
                            display: inline-block !important;
                            width: 66.66667% !important;
                          }
                          td.small-9,
                          th.small-9 {
                            display: inline-block !important;
                            width: 75% !important;
                          }
                          td.small-10,
                          th.small-10 {
                            display: inline-block !important;
                            width: 83.33333% !important;
                          }
                          td.small-11,
                          th.small-11 {
                            display: inline-block !important;
                            width: 91.66667% !important;
                          }
                          td.small-12,
                          th.small-12 {
                            display: inline-block !important;
                            width: 100% !important;
                          }
                          .columns td.small-12,
                          .column td.small-12,
                          .columns th.small-12,
                          .column th.small-12 {
                            display: block !important;
                            width: 100% !important;
                          }
                          table.body td.small-offset-1,
                          table.body th.small-offset-1 {
                            margin-left: 8.33333% !important;
                            Margin-left: 8.33333% !important;
                          }
                          table.body td.small-offset-2,
                          table.body th.small-offset-2 {
                            margin-left: 16.66667% !important;
                            Margin-left: 16.66667% !important;
                          }
                          table.body td.small-offset-3,
                          table.body th.small-offset-3 {
                            margin-left: 25% !important;
                            Margin-left: 25% !important;
                          }
                          table.body td.small-offset-4,
                          table.body th.small-offset-4 {
                            margin-left: 33.33333% !important;
                            Margin-left: 33.33333% !important;
                          }
                          table.body td.small-offset-5,
                          table.body th.small-offset-5 {
                            margin-left: 41.66667% !important;
                            Margin-left: 41.66667% !important;
                          }
                          table.body td.small-offset-6,
                          table.body th.small-offset-6 {
                            margin-left: 50% !important;
                            Margin-left: 50% !important;
                          }
                          table.body td.small-offset-7,
                          table.body th.small-offset-7 {
                            margin-left: 58.33333% !important;
                            Margin-left: 58.33333% !important;
                          }
                          table.body td.small-offset-8,
                          table.body th.small-offset-8 {
                            margin-left: 66.66667% !important;
                            Margin-left: 66.66667% !important;
                          }
                          table.body td.small-offset-9,
                          table.body th.small-offset-9 {
                            margin-left: 75% !important;
                            Margin-left: 75% !important;
                          }
                          table.body td.small-offset-10,
                          table.body th.small-offset-10 {
                            margin-left: 83.33333% !important;
                            Margin-left: 83.33333% !important;
                          }
                          table.body td.small-offset-11,
                          table.body th.small-offset-11 {
                            margin-left: 91.66667% !important;
                            Margin-left: 91.66667% !important;
                          }
                          table.body table.columns td.expander,
                          table.body table.columns th.expander {
                            display: none !important;
                          }
                          table.body .right-text-pad,
                          table.body .text-pad-right {
                            padding-left: 10px !important;
                          }
                          table.body .left-text-pad,
                          table.body .text-pad-left {
                            padding-right: 10px !important;
                          }
                          table.menu {
                            width: 100% !important;
                          }
                          table.menu td,
                          table.menu th {
                            width: auto !important;
                            display: inline-block !important;
                          }
                          table.menu.vertical td,
                          table.menu.vertical th,
                          table.menu.small-vertical td,
                          table.menu.small-vertical th {
                            display: block !important;
                          }
                          table.menu[align="center"] {
                            width: auto !important;
                          }
                          table.button.small-expand,
                          table.button.small-expanded {
                            width: 100% !important;
                          }
                          table.button.small-expand table,
                          table.button.small-expanded table {
                            width: 100%;
                          }
                          table.button.small-expand table a,
                          table.button.small-expanded table a {
                            text-align: center !important;
                            width: 100% !important;
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.button.small-expand center,
                          table.button.small-expanded center {
                            min-width: 0;
                          }
                        }
                      </style>
                      <!-- <style> -->
                      <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                        <tbody>
                          <tr style="padding: 0; text-align: left; vertical-align: top;">
                            <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                              <center data-parsed="" style="min-width: 580px; width: 100%;">
                    <table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                                <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                                              </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                        <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData["usrName"].',</h2>
                                                         <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          Welcome to Study.Net.  Unfortunately, your request to be affiliated with <strong>' . $messageData["schName"] . '</strong> as a coordinator has been denied at this time.  This is usually the result when we are unable to confirm your position at <strong>' . $messageData["schName"] . '</strong>.  </p>
                                                        <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          Until we are able to confirm your official role, you have been registered as a student user at  <strong>' . $messageData["schName"] . '</strong>.  
                                                        </p>
                                                        <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          Please open “Profile Info” to change your password, add an affiliation, or request a change in your user role.
                     
                                                        </p>
                                                        <p style="Margin: 0; Margin-bottom: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 0; padding: 0; text-align: left;">
                                                            If you can help resolve this issue, please send us a message at: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.  Thank you.
                                                        </p>
                                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </th>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                    <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                                                <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>                                          </th>
                                                              <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </center>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    
                    </body>
                    
                    </html>';
        return $strBody;
    }

    function schDeclined($messageData){

        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                    
                    <head>
                      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                      <meta name="viewport" content="width=device-width">
                      <title>Study.Net - New Entity Denied</title>
                    </head>
                    
                    <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                      <style>
                        @media only screen {
                          html {
                            min-height: 100%;
                            background: #f3f3f3;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .small-float-center {
                            margin: 0 auto !important;
                            float: none !important;
                            text-align: center !important;
                          }
                          .small-text-center {
                            text-align: center !important;
                          }
                          .small-text-left {
                            text-align: left !important;
                          }
                          .small-text-right {
                            text-align: right !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          .hide-for-large {
                            display: block !important;
                            width: auto !important;
                            overflow: visible !important;
                            max-height: none !important;
                            font-size: inherit !important;
                            line-height: inherit !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .hide-for-large,
                          table.body table.container .row.hide-for-large {
                            display: table !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .callout-inner.hide-for-large {
                            display: table-cell !important;
                            width: 100% !important;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body table.container .show-for-large {
                            display: none !important;
                            width: 0;
                            mso-hide: all;
                            overflow: hidden;
                          }
                        }
                        
                        @media only screen and (max-width: 596px) {
                          table.body img {
                            width: auto;
                            height: auto;
                          }
                          table.body center {
                            min-width: 0 !important;
                          }
                          table.body .container {
                            width: 95% !important;
                          }
                          table.body .columns,
                          table.body .column {
                            height: auto !important;
                            -moz-box-sizing: border-box;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            padding-left: 16px !important;
                            padding-right: 16px !important;
                          }
                          table.body .columns .column,
                          table.body .columns .columns,
                          table.body .column .column,
                          table.body .column .columns {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.body .collapse .columns,
                          table.body .collapse .column {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          td.small-1,
                          th.small-1 {
                            display: inline-block !important;
                            width: 8.33333% !important;
                          }
                          td.small-2,
                          th.small-2 {
                            display: inline-block !important;
                            width: 16.66667% !important;
                          }
                          td.small-3,
                          th.small-3 {
                            display: inline-block !important;
                            width: 25% !important;
                          }
                          td.small-4,
                          th.small-4 {
                            display: inline-block !important;
                            width: 33.33333% !important;
                          }
                          td.small-5,
                          th.small-5 {
                            display: inline-block !important;
                            width: 41.66667% !important;
                          }
                          td.small-6,
                          th.small-6 {
                            display: inline-block !important;
                            width: 50% !important;
                          }
                          td.small-7,
                          th.small-7 {
                            display: inline-block !important;
                            width: 58.33333% !important;
                          }
                          td.small-8,
                          th.small-8 {
                            display: inline-block !important;
                            width: 66.66667% !important;
                          }
                          td.small-9,
                          th.small-9 {
                            display: inline-block !important;
                            width: 75% !important;
                          }
                          td.small-10,
                          th.small-10 {
                            display: inline-block !important;
                            width: 83.33333% !important;
                          }
                          td.small-11,
                          th.small-11 {
                            display: inline-block !important;
                            width: 91.66667% !important;
                          }
                          td.small-12,
                          th.small-12 {
                            display: inline-block !important;
                            width: 100% !important;
                          }
                          .columns td.small-12,
                          .column td.small-12,
                          .columns th.small-12,
                          .column th.small-12 {
                            display: block !important;
                            width: 100% !important;
                          }
                          table.body td.small-offset-1,
                          table.body th.small-offset-1 {
                            margin-left: 8.33333% !important;
                            Margin-left: 8.33333% !important;
                          }
                          table.body td.small-offset-2,
                          table.body th.small-offset-2 {
                            margin-left: 16.66667% !important;
                            Margin-left: 16.66667% !important;
                          }
                          table.body td.small-offset-3,
                          table.body th.small-offset-3 {
                            margin-left: 25% !important;
                            Margin-left: 25% !important;
                          }
                          table.body td.small-offset-4,
                          table.body th.small-offset-4 {
                            margin-left: 33.33333% !important;
                            Margin-left: 33.33333% !important;
                          }
                          table.body td.small-offset-5,
                          table.body th.small-offset-5 {
                            margin-left: 41.66667% !important;
                            Margin-left: 41.66667% !important;
                          }
                          table.body td.small-offset-6,
                          table.body th.small-offset-6 {
                            margin-left: 50% !important;
                            Margin-left: 50% !important;
                          }
                          table.body td.small-offset-7,
                          table.body th.small-offset-7 {
                            margin-left: 58.33333% !important;
                            Margin-left: 58.33333% !important;
                          }
                          table.body td.small-offset-8,
                          table.body th.small-offset-8 {
                            margin-left: 66.66667% !important;
                            Margin-left: 66.66667% !important;
                          }
                          table.body td.small-offset-9,
                          table.body th.small-offset-9 {
                            margin-left: 75% !important;
                            Margin-left: 75% !important;
                          }
                          table.body td.small-offset-10,
                          table.body th.small-offset-10 {
                            margin-left: 83.33333% !important;
                            Margin-left: 83.33333% !important;
                          }
                          table.body td.small-offset-11,
                          table.body th.small-offset-11 {
                            margin-left: 91.66667% !important;
                            Margin-left: 91.66667% !important;
                          }
                          table.body table.columns td.expander,
                          table.body table.columns th.expander {
                            display: none !important;
                          }
                          table.body .right-text-pad,
                          table.body .text-pad-right {
                            padding-left: 10px !important;
                          }
                          table.body .left-text-pad,
                          table.body .text-pad-left {
                            padding-right: 10px !important;
                          }
                          table.menu {
                            width: 100% !important;
                          }
                          table.menu td,
                          table.menu th {
                            width: auto !important;
                            display: inline-block !important;
                          }
                          table.menu.vertical td,
                          table.menu.vertical th,
                          table.menu.small-vertical td,
                          table.menu.small-vertical th {
                            display: block !important;
                          }
                          table.menu[align="center"] {
                            width: auto !important;
                          }
                          table.button.small-expand,
                          table.button.small-expanded {
                            width: 100% !important;
                          }
                          table.button.small-expand table,
                          table.button.small-expanded table {
                            width: 100%;
                          }
                          table.button.small-expand table a,
                          table.button.small-expanded table a {
                            text-align: center !important;
                            width: 100% !important;
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                          }
                          table.button.small-expand center,
                          table.button.small-expanded center {
                            min-width: 0;
                          }
                        }
                      </style>
                      <!-- <style> -->
                      <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                        <tbody>
                          <tr style="padding: 0; text-align: left; vertical-align: top;">
                            <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                              <center data-parsed="" style="min-width: 580px; width: 100%;">
                    <table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                                <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                                              </th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                              <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                        <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData["usrName"].',</h2>
                                                         <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                                          Welcome to Study.Net.  Unfortunately, your request to create a new listing for <strong>' . $messageData["schName"] . '</strong> has been declined at this time.  This is usually the case when the ' . $messageData["schName"] . ' name or other identifying information cannot be confirmed.</p>
                                                        <p style="Margin: 0; Margin-bottom: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 0; padding: 0; text-align: left;">
                                                            If you can help resolve this issue, please send us a message at: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.  Thank you.
                                                        </p>
                                                        <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                      <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </th>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                                          <tbody>
                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                    <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                  <tbody>
                                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                      <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                        <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                          <tbody>
                                                            <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                              <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                                                <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>                                          </th>
                                                              <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                      </th>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </center>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    
                    </body>
                    
                    </html>';
        return $strBody;
    }

    function studOptedFirstMail($messageData){
        $strBody='
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Study.Net - Register Student Affiliation</title>
</head>

<body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
  <style>
    @media only screen {
      html {
        min-height: 100%;
        background: #f3f3f3;
      }
    }

    @media only screen and (max-width: 596px) {
      .small-float-center {
        margin: 0 auto !important;
        float: none !important;
        text-align: center !important;
      }
      .small-text-center {
        text-align: center !important;
      }
      .small-text-left {
        text-align: left !important;
      }
      .small-text-right {
        text-align: right !important;
      }
    }

    @media only screen and (max-width: 596px) {
      .hide-for-large {
        display: block !important;
        width: auto !important;
        overflow: visible !important;
        max-height: none !important;
        font-size: inherit !important;
        line-height: inherit !important;
      }
    }

    @media only screen and (max-width: 596px) {
      table.body table.container .hide-for-large,
      table.body table.container .row.hide-for-large {
        display: table !important;
        width: 100% !important;
      }
    }

    @media only screen and (max-width: 596px) {
      table.body table.container .callout-inner.hide-for-large {
        display: table-cell !important;
        width: 100% !important;
      }
    }

    @media only screen and (max-width: 596px) {
      table.body table.container .show-for-large {
        display: none !important;
        width: 0;
        mso-hide: all;
        overflow: hidden;
      }
    }

    @media only screen and (max-width: 596px) {
      table.body img {
        width: auto;
        height: auto;
      }
      table.body center {
        min-width: 0 !important;
      }
      table.body .container {
        width: 95% !important;
      }
      table.body .columns,
      table.body .column {
        height: auto !important;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding-left: 16px !important;
        padding-right: 16px !important;
      }
      table.body .columns .column,
      table.body .columns .columns,
      table.body .column .column,
      table.body .column .columns {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.body .collapse .columns,
      table.body .collapse .column {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      td.small-1,
      th.small-1 {
        display: inline-block !important;
        width: 8.33333% !important;
      }
      td.small-2,
      th.small-2 {
        display: inline-block !important;
        width: 16.66667% !important;
      }
      td.small-3,
      th.small-3 {
        display: inline-block !important;
        width: 25% !important;
      }
      td.small-4,
      th.small-4 {
        display: inline-block !important;
        width: 33.33333% !important;
      }
      td.small-5,
      th.small-5 {
        display: inline-block !important;
        width: 41.66667% !important;
      }
      td.small-6,
      th.small-6 {
        display: inline-block !important;
        width: 50% !important;
      }
      td.small-7,
      th.small-7 {
        display: inline-block !important;
        width: 58.33333% !important;
      }
      td.small-8,
      th.small-8 {
        display: inline-block !important;
        width: 66.66667% !important;
      }
      td.small-9,
      th.small-9 {
        display: inline-block !important;
        width: 75% !important;
      }
      td.small-10,
      th.small-10 {
        display: inline-block !important;
        width: 83.33333% !important;
      }
      td.small-11,
      th.small-11 {
        display: inline-block !important;
        width: 91.66667% !important;
      }
      td.small-12,
      th.small-12 {
        display: inline-block !important;
        width: 100% !important;
      }
      .columns td.small-12,
      .column td.small-12,
      .columns th.small-12,
      .column th.small-12 {
        display: block !important;
        width: 100% !important;
      }
      table.body td.small-offset-1,
      table.body th.small-offset-1 {
        margin-left: 8.33333% !important;
        Margin-left: 8.33333% !important;
      }
      table.body td.small-offset-2,
      table.body th.small-offset-2 {
        margin-left: 16.66667% !important;
        Margin-left: 16.66667% !important;
      }
      table.body td.small-offset-3,
      table.body th.small-offset-3 {
        margin-left: 25% !important;
        Margin-left: 25% !important;
      }
      table.body td.small-offset-4,
      table.body th.small-offset-4 {
        margin-left: 33.33333% !important;
        Margin-left: 33.33333% !important;
      }
      table.body td.small-offset-5,
      table.body th.small-offset-5 {
        margin-left: 41.66667% !important;
        Margin-left: 41.66667% !important;
      }
      table.body td.small-offset-6,
      table.body th.small-offset-6 {
        margin-left: 50% !important;
        Margin-left: 50% !important;
      }
      table.body td.small-offset-7,
      table.body th.small-offset-7 {
        margin-left: 58.33333% !important;
        Margin-left: 58.33333% !important;
      }
      table.body td.small-offset-8,
      table.body th.small-offset-8 {
        margin-left: 66.66667% !important;
        Margin-left: 66.66667% !important;
      }
      table.body td.small-offset-9,
      table.body th.small-offset-9 {
        margin-left: 75% !important;
        Margin-left: 75% !important;
      }
      table.body td.small-offset-10,
      table.body th.small-offset-10 {
        margin-left: 83.33333% !important;
        Margin-left: 83.33333% !important;
      }
      table.body td.small-offset-11,
      table.body th.small-offset-11 {
        margin-left: 91.66667% !important;
        Margin-left: 91.66667% !important;
      }
      table.body table.columns td.expander,
      table.body table.columns th.expander {
        display: none !important;
      }
      table.body .right-text-pad,
      table.body .text-pad-right {
        padding-left: 10px !important;
      }
      table.body .left-text-pad,
      table.body .text-pad-left {
        padding-right: 10px !important;
      }
      table.menu {
        width: 100% !important;
      }
      table.menu td,
      table.menu th {
        width: auto !important;
        display: inline-block !important;
      }
      table.menu.vertical td,
      table.menu.vertical th,
      table.menu.small-vertical td,
      table.menu.small-vertical th {
        display: block !important;
      }
      table.menu[align="center"] {
        width: auto !important;
      }
      table.button.small-expand,
      table.button.small-expanded {
        width: 100% !important;
      }
      table.button.small-expand table,
      table.button.small-expanded table {
        width: 100%;
      }
      table.button.small-expand table a,
      table.button.small-expanded table a {
        text-align: center !important;
        width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.button.small-expand center,
      table.button.small-expanded center {
        min-width: 0;
      }
    }
  </style>
  <!-- <style> -->
  <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
    <tbody>
      <tr style="padding: 0; text-align: left; vertical-align: top;">
        <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
          <center data-parsed="" style="min-width: 580px; width: 100%;">
<table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                            <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                          </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                    <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData['usrName'] .',</h2>
<p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                      Welcome to Study.Net.  As a registered user, you can now purchase (or otherwise access) content bundles available to students at <strong>'.$messageData['schName'] .'</strong>.  Please open the “Store” link to view all of the courses available to you.
                                    </p>
                                    <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                      Please open “Profile Info” to change your password, add an affiliation, or request a change in your user role.
                                    </p>
                                    <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                      If you have any questions, at any time, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.
                                    </p>
                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                </tr>
                              </tbody>
                            </table>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                    <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
<td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                            <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>                                          </th>
                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </center>
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html>
        ';
        return $strBody;
    }

    function instOptedFirstMail($messageData){
        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Study.Net - Register Coordinator Affiliation</title>
</head>

<body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
  <style>
    @media only screen {
      html {
        min-height: 100%;
        background: #f3f3f3;
      }
    }

    @media only screen and (max-width: 596px) {
      .small-float-center {
        margin: 0 auto !important;
        float: none !important;
        text-align: center !important;
      }
      .small-text-center {
        text-align: center !important;
      }
      .small-text-left {
        text-align: left !important;
      }
      .small-text-right {
        text-align: right !important;
      }
    }

    @media only screen and (max-width: 596px) {
      .hide-for-large {
        display: block !important;
        width: auto !important;
        overflow: visible !important;
        max-height: none !important;
        font-size: inherit !important;
        line-height: inherit !important;
      }
    }

    @media only screen and (max-width: 596px) {
      table.body table.container .hide-for-large,
      table.body table.container .row.hide-for-large {
        display: table !important;
        width: 100% !important;
      }
    }

    @media only screen and (max-width: 596px) {
      table.body table.container .callout-inner.hide-for-large {
        display: table-cell !important;
        width: 100% !important;
      }
    }

    @media only screen and (max-width: 596px) {
      table.body table.container .show-for-large {
        display: none !important;
        width: 0;
        mso-hide: all;
        overflow: hidden;
      }
    }

    @media only screen and (max-width: 596px) {
      table.body img {
        width: auto;
        height: auto;
      }
      table.body center {
        min-width: 0 !important;
      }
      table.body .container {
        width: 95% !important;
      }
      table.body .columns,
      table.body .column {
        height: auto !important;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding-left: 16px !important;
        padding-right: 16px !important;
      }
      table.body .columns .column,
      table.body .columns .columns,
      table.body .column .column,
      table.body .column .columns {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.body .collapse .columns,
      table.body .collapse .column {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      td.small-1,
      th.small-1 {
        display: inline-block !important;
        width: 8.33333% !important;
      }
      td.small-2,
      th.small-2 {
        display: inline-block !important;
        width: 16.66667% !important;
      }
      td.small-3,
      th.small-3 {
        display: inline-block !important;
        width: 25% !important;
      }
      td.small-4,
      th.small-4 {
        display: inline-block !important;
        width: 33.33333% !important;
      }
      td.small-5,
      th.small-5 {
        display: inline-block !important;
        width: 41.66667% !important;
      }
      td.small-6,
      th.small-6 {
        display: inline-block !important;
        width: 50% !important;
      }
      td.small-7,
      th.small-7 {
        display: inline-block !important;
        width: 58.33333% !important;
      }
      td.small-8,
      th.small-8 {
        display: inline-block !important;
        width: 66.66667% !important;
      }
      td.small-9,
      th.small-9 {
        display: inline-block !important;
        width: 75% !important;
      }
      td.small-10,
      th.small-10 {
        display: inline-block !important;
        width: 83.33333% !important;
      }
      td.small-11,
      th.small-11 {
        display: inline-block !important;
        width: 91.66667% !important;
      }
      td.small-12,
      th.small-12 {
        display: inline-block !important;
        width: 100% !important;
      }
      .columns td.small-12,
      .column td.small-12,
      .columns th.small-12,
      .column th.small-12 {
        display: block !important;
        width: 100% !important;
      }
      table.body td.small-offset-1,
      table.body th.small-offset-1 {
        margin-left: 8.33333% !important;
        Margin-left: 8.33333% !important;
      }
      table.body td.small-offset-2,
      table.body th.small-offset-2 {
        margin-left: 16.66667% !important;
        Margin-left: 16.66667% !important;
      }
      table.body td.small-offset-3,
      table.body th.small-offset-3 {
        margin-left: 25% !important;
        Margin-left: 25% !important;
      }
      table.body td.small-offset-4,
      table.body th.small-offset-4 {
        margin-left: 33.33333% !important;
        Margin-left: 33.33333% !important;
      }
      table.body td.small-offset-5,
      table.body th.small-offset-5 {
        margin-left: 41.66667% !important;
        Margin-left: 41.66667% !important;
      }
      table.body td.small-offset-6,
      table.body th.small-offset-6 {
        margin-left: 50% !important;
        Margin-left: 50% !important;
      }
      table.body td.small-offset-7,
      table.body th.small-offset-7 {
        margin-left: 58.33333% !important;
        Margin-left: 58.33333% !important;
      }
      table.body td.small-offset-8,
      table.body th.small-offset-8 {
        margin-left: 66.66667% !important;
        Margin-left: 66.66667% !important;
      }
      table.body td.small-offset-9,
      table.body th.small-offset-9 {
        margin-left: 75% !important;
        Margin-left: 75% !important;
      }
      table.body td.small-offset-10,
      table.body th.small-offset-10 {
        margin-left: 83.33333% !important;
        Margin-left: 83.33333% !important;
      }
      table.body td.small-offset-11,
      table.body th.small-offset-11 {
        margin-left: 91.66667% !important;
        Margin-left: 91.66667% !important;
      }
      table.body table.columns td.expander,
      table.body table.columns th.expander {
        display: none !important;
      }
      table.body .right-text-pad,
      table.body .text-pad-right {
        padding-left: 10px !important;
      }
      table.body .left-text-pad,
      table.body .text-pad-left {
        padding-right: 10px !important;
      }
      table.menu {
        width: 100% !important;
      }
      table.menu td,
      table.menu th {
        width: auto !important;
        display: inline-block !important;
      }
      table.menu.vertical td,
      table.menu.vertical th,
      table.menu.small-vertical td,
      table.menu.small-vertical th {
        display: block !important;
      }
      table.menu[align="center"] {
        width: auto !important;
      }
      table.button.small-expand,
      table.button.small-expanded {
        width: 100% !important;
      }
      table.button.small-expand table,
      table.button.small-expanded table {
        width: 100%;
      }
      table.button.small-expand table a,
      table.button.small-expanded table a {
        text-align: center !important;
        width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.button.small-expand center,
      table.button.small-expanded center {
        min-width: 0;
      }
    }
  </style>
  <!-- <style> -->
  <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
    <tbody>
      <tr style="padding: 0; text-align: left; vertical-align: top;">
        <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
          <center data-parsed="" style="min-width: 580px; width: 100%;">
<table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                           <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                          </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                    <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData['usrName'].',</h2>
<p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                      Welcome to Study.Net.  As a registered user, you can now purchase (or otherwise access) content bundles available to students at <strong>'.$messageData['schName'].'</strong>.  Please open the “Store” link to view all of the courses available to students.
                                    </p>
                                    <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                      Your request for Instructor status is pending approval. This process is normally completed within 24 hours, after which you’ll receive an email confirmation.
                                    </p>
                                    <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                        Please open “Profile Info” to change your password, add an affiliation, or request a change in your user role.
                                    </p>
                                    <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                      If you have any questions, at any time, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.
                                    </p>
                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                </tr>
                              </tbody>
                            </table>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                    <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
<td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                            <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>
                                          </th>
                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </center>
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html>';
        return $strBody;
    }

    function cordOptedFirstMail($messageData){
        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Study.Net - Register Coordinator Affiliation</title>
</head>

<body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
  <style>
    @media only screen {
      html {
        min-height: 100%;
        background: #f3f3f3;
      }
    }

    @media only screen and (max-width: 596px) {
      .small-float-center {
        margin: 0 auto !important;
        float: none !important;
        text-align: center !important;
      }
      .small-text-center {
        text-align: center !important;
      }
      .small-text-left {
        text-align: left !important;
      }
      .small-text-right {
        text-align: right !important;
      }
    }

    @media only screen and (max-width: 596px) {
      .hide-for-large {
        display: block !important;
        width: auto !important;
        overflow: visible !important;
        max-height: none !important;
        font-size: inherit !important;
        line-height: inherit !important;
      }
    }

    @media only screen and (max-width: 596px) {
      table.body table.container .hide-for-large,
      table.body table.container .row.hide-for-large {
        display: table !important;
        width: 100% !important;
      }
    }

    @media only screen and (max-width: 596px) {
      table.body table.container .callout-inner.hide-for-large {
        display: table-cell !important;
        width: 100% !important;
      }
    }

    @media only screen and (max-width: 596px) {
      table.body table.container .show-for-large {
        display: none !important;
        width: 0;
        mso-hide: all;
        overflow: hidden;
      }
    }

    @media only screen and (max-width: 596px) {
      table.body img {
        width: auto;
        height: auto;
      }
      table.body center {
        min-width: 0 !important;
      }
      table.body .container {
        width: 95% !important;
      }
      table.body .columns,
      table.body .column {
        height: auto !important;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding-left: 16px !important;
        padding-right: 16px !important;
      }
      table.body .columns .column,
      table.body .columns .columns,
      table.body .column .column,
      table.body .column .columns {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.body .collapse .columns,
      table.body .collapse .column {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      td.small-1,
      th.small-1 {
        display: inline-block !important;
        width: 8.33333% !important;
      }
      td.small-2,
      th.small-2 {
        display: inline-block !important;
        width: 16.66667% !important;
      }
      td.small-3,
      th.small-3 {
        display: inline-block !important;
        width: 25% !important;
      }
      td.small-4,
      th.small-4 {
        display: inline-block !important;
        width: 33.33333% !important;
      }
      td.small-5,
      th.small-5 {
        display: inline-block !important;
        width: 41.66667% !important;
      }
      td.small-6,
      th.small-6 {
        display: inline-block !important;
        width: 50% !important;
      }
      td.small-7,
      th.small-7 {
        display: inline-block !important;
        width: 58.33333% !important;
      }
      td.small-8,
      th.small-8 {
        display: inline-block !important;
        width: 66.66667% !important;
      }
      td.small-9,
      th.small-9 {
        display: inline-block !important;
        width: 75% !important;
      }
      td.small-10,
      th.small-10 {
        display: inline-block !important;
        width: 83.33333% !important;
      }
      td.small-11,
      th.small-11 {
        display: inline-block !important;
        width: 91.66667% !important;
      }
      td.small-12,
      th.small-12 {
        display: inline-block !important;
        width: 100% !important;
      }
      .columns td.small-12,
      .column td.small-12,
      .columns th.small-12,
      .column th.small-12 {
        display: block !important;
        width: 100% !important;
      }
      table.body td.small-offset-1,
      table.body th.small-offset-1 {
        margin-left: 8.33333% !important;
        Margin-left: 8.33333% !important;
      }
      table.body td.small-offset-2,
      table.body th.small-offset-2 {
        margin-left: 16.66667% !important;
        Margin-left: 16.66667% !important;
      }
      table.body td.small-offset-3,
      table.body th.small-offset-3 {
        margin-left: 25% !important;
        Margin-left: 25% !important;
      }
      table.body td.small-offset-4,
      table.body th.small-offset-4 {
        margin-left: 33.33333% !important;
        Margin-left: 33.33333% !important;
      }
      table.body td.small-offset-5,
      table.body th.small-offset-5 {
        margin-left: 41.66667% !important;
        Margin-left: 41.66667% !important;
      }
      table.body td.small-offset-6,
      table.body th.small-offset-6 {
        margin-left: 50% !important;
        Margin-left: 50% !important;
      }
      table.body td.small-offset-7,
      table.body th.small-offset-7 {
        margin-left: 58.33333% !important;
        Margin-left: 58.33333% !important;
      }
      table.body td.small-offset-8,
      table.body th.small-offset-8 {
        margin-left: 66.66667% !important;
        Margin-left: 66.66667% !important;
      }
      table.body td.small-offset-9,
      table.body th.small-offset-9 {
        margin-left: 75% !important;
        Margin-left: 75% !important;
      }
      table.body td.small-offset-10,
      table.body th.small-offset-10 {
        margin-left: 83.33333% !important;
        Margin-left: 83.33333% !important;
      }
      table.body td.small-offset-11,
      table.body th.small-offset-11 {
        margin-left: 91.66667% !important;
        Margin-left: 91.66667% !important;
      }
      table.body table.columns td.expander,
      table.body table.columns th.expander {
        display: none !important;
      }
      table.body .right-text-pad,
      table.body .text-pad-right {
        padding-left: 10px !important;
      }
      table.body .left-text-pad,
      table.body .text-pad-left {
        padding-right: 10px !important;
      }
      table.menu {
        width: 100% !important;
      }
      table.menu td,
      table.menu th {
        width: auto !important;
        display: inline-block !important;
      }
      table.menu.vertical td,
      table.menu.vertical th,
      table.menu.small-vertical td,
      table.menu.small-vertical th {
        display: block !important;
      }
      table.menu[align="center"] {
        width: auto !important;
      }
      table.button.small-expand,
      table.button.small-expanded {
        width: 100% !important;
      }
      table.button.small-expand table,
      table.button.small-expanded table {
        width: 100%;
      }
      table.button.small-expand table a,
      table.button.small-expanded table a {
        text-align: center !important;
        width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.button.small-expand center,
      table.button.small-expanded center {
        min-width: 0;
      }
    }
  </style>
  <!-- <style> -->
  <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
    <tbody>
      <tr style="padding: 0; text-align: left; vertical-align: top;">
        <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
          <center data-parsed="" style="min-width: 580px; width: 100%;">
<table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                            <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                          </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                    <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData['usrName'].',</h2>
<p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                      Welcome to Study.Net.  As a registered user, you can now purchase (or otherwise access) content bundles available to students at <strong>'.$messageData['schName'].'</strong>.  Please open the “Store” link to view all of the courses available to students.
                                    </p>
                                    <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                      Your request for coordinator status is pending approval. This process is normally completed within 24 hours, after which you’ll receive an email confirmation.
                                    </p>
                                    <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                      Please open “Profile Info” to change your password, add an affiliation, or request a change in your user role.
                                    </p>
                                    <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                      If you have any questions, at any time, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.
                                    </p>
                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                </tr>
                              </tbody>
                            </table>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                    <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
<td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                            <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>
                                          </th>
                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </center>
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html>';
        return $strBody;
    }

    function studOpted($messageData){
        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Study.Net - Student Affiliation</title>
</head>

<body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
  <style>
    @media only screen {
      html {
        min-height: 100%;
        background: #f3f3f3;
      }
    }
    
    @media only screen and (max-width: 596px) {
      .small-float-center {
        margin: 0 auto !important;
        float: none !important;
        text-align: center !important;
      }
      .small-text-center {
        text-align: center !important;
      }
      .small-text-left {
        text-align: left !important;
      }
      .small-text-right {
        text-align: right !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      .hide-for-large {
        display: block !important;
        width: auto !important;
        overflow: visible !important;
        max-height: none !important;
        font-size: inherit !important;
        line-height: inherit !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body table.container .hide-for-large,
      table.body table.container .row.hide-for-large {
        display: table !important;
        width: 100% !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body table.container .callout-inner.hide-for-large {
        display: table-cell !important;
        width: 100% !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body table.container .show-for-large {
        display: none !important;
        width: 0;
        mso-hide: all;
        overflow: hidden;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body img {
        width: auto;
        height: auto;
      }
      table.body center {
        min-width: 0 !important;
      }
      table.body .container {
        width: 95% !important;
      }
      table.body .columns,
      table.body .column {
        height: auto !important;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding-left: 16px !important;
        padding-right: 16px !important;
      }
      table.body .columns .column,
      table.body .columns .columns,
      table.body .column .column,
      table.body .column .columns {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.body .collapse .columns,
      table.body .collapse .column {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      td.small-1,
      th.small-1 {
        display: inline-block !important;
        width: 8.33333% !important;
      }
      td.small-2,
      th.small-2 {
        display: inline-block !important;
        width: 16.66667% !important;
      }
      td.small-3,
      th.small-3 {
        display: inline-block !important;
        width: 25% !important;
      }
      td.small-4,
      th.small-4 {
        display: inline-block !important;
        width: 33.33333% !important;
      }
      td.small-5,
      th.small-5 {
        display: inline-block !important;
        width: 41.66667% !important;
      }
      td.small-6,
      th.small-6 {
        display: inline-block !important;
        width: 50% !important;
      }
      td.small-7,
      th.small-7 {
        display: inline-block !important;
        width: 58.33333% !important;
      }
      td.small-8,
      th.small-8 {
        display: inline-block !important;
        width: 66.66667% !important;
      }
      td.small-9,
      th.small-9 {
        display: inline-block !important;
        width: 75% !important;
      }
      td.small-10,
      th.small-10 {
        display: inline-block !important;
        width: 83.33333% !important;
      }
      td.small-11,
      th.small-11 {
        display: inline-block !important;
        width: 91.66667% !important;
      }
      td.small-12,
      th.small-12 {
        display: inline-block !important;
        width: 100% !important;
      }
      .columns td.small-12,
      .column td.small-12,
      .columns th.small-12,
      .column th.small-12 {
        display: block !important;
        width: 100% !important;
      }
      table.body td.small-offset-1,
      table.body th.small-offset-1 {
        margin-left: 8.33333% !important;
        Margin-left: 8.33333% !important;
      }
      table.body td.small-offset-2,
      table.body th.small-offset-2 {
        margin-left: 16.66667% !important;
        Margin-left: 16.66667% !important;
      }
      table.body td.small-offset-3,
      table.body th.small-offset-3 {
        margin-left: 25% !important;
        Margin-left: 25% !important;
      }
      table.body td.small-offset-4,
      table.body th.small-offset-4 {
        margin-left: 33.33333% !important;
        Margin-left: 33.33333% !important;
      }
      table.body td.small-offset-5,
      table.body th.small-offset-5 {
        margin-left: 41.66667% !important;
        Margin-left: 41.66667% !important;
      }
      table.body td.small-offset-6,
      table.body th.small-offset-6 {
        margin-left: 50% !important;
        Margin-left: 50% !important;
      }
      table.body td.small-offset-7,
      table.body th.small-offset-7 {
        margin-left: 58.33333% !important;
        Margin-left: 58.33333% !important;
      }
      table.body td.small-offset-8,
      table.body th.small-offset-8 {
        margin-left: 66.66667% !important;
        Margin-left: 66.66667% !important;
      }
      table.body td.small-offset-9,
      table.body th.small-offset-9 {
        margin-left: 75% !important;
        Margin-left: 75% !important;
      }
      table.body td.small-offset-10,
      table.body th.small-offset-10 {
        margin-left: 83.33333% !important;
        Margin-left: 83.33333% !important;
      }
      table.body td.small-offset-11,
      table.body th.small-offset-11 {
        margin-left: 91.66667% !important;
        Margin-left: 91.66667% !important;
      }
      table.body table.columns td.expander,
      table.body table.columns th.expander {
        display: none !important;
      }
      table.body .right-text-pad,
      table.body .text-pad-right {
        padding-left: 10px !important;
      }
      table.body .left-text-pad,
      table.body .text-pad-left {
        padding-right: 10px !important;
      }
      table.menu {
        width: 100% !important;
      }
      table.menu td,
      table.menu th {
        width: auto !important;
        display: inline-block !important;
      }
      table.menu.vertical td,
      table.menu.vertical th,
      table.menu.small-vertical td,
      table.menu.small-vertical th {
        display: block !important;
      }
      table.menu[align="center"] {
        width: auto !important;
      }
      table.button.small-expand,
      table.button.small-expanded {
        width: 100% !important;
      }
      table.button.small-expand table,
      table.button.small-expanded table {
        width: 100%;
      }
      table.button.small-expand table a,
      table.button.small-expanded table a {
        text-align: center !important;
        width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.button.small-expand center,
      table.button.small-expanded center {
        min-width: 0;
      }
    }
  </style>
  <!-- <style> -->
  <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
    <tbody>
      <tr style="padding: 0; text-align: left; vertical-align: top;">
        <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
          <center data-parsed="" style="min-width: 580px; width: 100%;">
<table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                            <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                          </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                    <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData['usrName'].',</h2>
                                    <p style="Margin: 0; Margin-bottom: 16px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 16px; padding: 0; text-align: left;">
                                      Your profile at Study.Net has been updated. You are now affiliated with <strong>'.$messageData['schName'].'</strong> as a student. Please open the “Store” link to view all of the courses available to students with this affiliation.</p>
                                    <p style="Margin: 0; Margin-bottom: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 0; padding: 0; text-align: left;">
If you have any questions, at any time, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.
                                    </p>
                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                </tr>
                              </tbody>
                            </table>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                    <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
<td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                            <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>                                          </th>
                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </center>
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html>';
        return $strBody;
    }

    function instOpted($messageData){
        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Study.Net - Instructor Affiliation</title>
</head>

<body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
  <style>
    @media only screen {
      html {
        min-height: 100%;
        background: #f3f3f3;
      }
    }
    
    @media only screen and (max-width: 596px) {
      .small-float-center {
        margin: 0 auto !important;
        float: none !important;
        text-align: center !important;
      }
      .small-text-center {
        text-align: center !important;
      }
      .small-text-left {
        text-align: left !important;
      }
      .small-text-right {
        text-align: right !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      .hide-for-large {
        display: block !important;
        width: auto !important;
        overflow: visible !important;
        max-height: none !important;
        font-size: inherit !important;
        line-height: inherit !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body table.container .hide-for-large,
      table.body table.container .row.hide-for-large {
        display: table !important;
        width: 100% !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body table.container .callout-inner.hide-for-large {
        display: table-cell !important;
        width: 100% !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body table.container .show-for-large {
        display: none !important;
        width: 0;
        mso-hide: all;
        overflow: hidden;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body img {
        width: auto;
        height: auto;
      }
      table.body center {
        min-width: 0 !important;
      }
      table.body .container {
        width: 95% !important;
      }
      table.body .columns,
      table.body .column {
        height: auto !important;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding-left: 16px !important;
        padding-right: 16px !important;
      }
      table.body .columns .column,
      table.body .columns .columns,
      table.body .column .column,
      table.body .column .columns {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.body .collapse .columns,
      table.body .collapse .column {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      td.small-1,
      th.small-1 {
        display: inline-block !important;
        width: 8.33333% !important;
      }
      td.small-2,
      th.small-2 {
        display: inline-block !important;
        width: 16.66667% !important;
      }
      td.small-3,
      th.small-3 {
        display: inline-block !important;
        width: 25% !important;
      }
      td.small-4,
      th.small-4 {
        display: inline-block !important;
        width: 33.33333% !important;
      }
      td.small-5,
      th.small-5 {
        display: inline-block !important;
        width: 41.66667% !important;
      }
      td.small-6,
      th.small-6 {
        display: inline-block !important;
        width: 50% !important;
      }
      td.small-7,
      th.small-7 {
        display: inline-block !important;
        width: 58.33333% !important;
      }
      td.small-8,
      th.small-8 {
        display: inline-block !important;
        width: 66.66667% !important;
      }
      td.small-9,
      th.small-9 {
        display: inline-block !important;
        width: 75% !important;
      }
      td.small-10,
      th.small-10 {
        display: inline-block !important;
        width: 83.33333% !important;
      }
      td.small-11,
      th.small-11 {
        display: inline-block !important;
        width: 91.66667% !important;
      }
      td.small-12,
      th.small-12 {
        display: inline-block !important;
        width: 100% !important;
      }
      .columns td.small-12,
      .column td.small-12,
      .columns th.small-12,
      .column th.small-12 {
        display: block !important;
        width: 100% !important;
      }
      table.body td.small-offset-1,
      table.body th.small-offset-1 {
        margin-left: 8.33333% !important;
        Margin-left: 8.33333% !important;
      }
      table.body td.small-offset-2,
      table.body th.small-offset-2 {
        margin-left: 16.66667% !important;
        Margin-left: 16.66667% !important;
      }
      table.body td.small-offset-3,
      table.body th.small-offset-3 {
        margin-left: 25% !important;
        Margin-left: 25% !important;
      }
      table.body td.small-offset-4,
      table.body th.small-offset-4 {
        margin-left: 33.33333% !important;
        Margin-left: 33.33333% !important;
      }
      table.body td.small-offset-5,
      table.body th.small-offset-5 {
        margin-left: 41.66667% !important;
        Margin-left: 41.66667% !important;
      }
      table.body td.small-offset-6,
      table.body th.small-offset-6 {
        margin-left: 50% !important;
        Margin-left: 50% !important;
      }
      table.body td.small-offset-7,
      table.body th.small-offset-7 {
        margin-left: 58.33333% !important;
        Margin-left: 58.33333% !important;
      }
      table.body td.small-offset-8,
      table.body th.small-offset-8 {
        margin-left: 66.66667% !important;
        Margin-left: 66.66667% !important;
      }
      table.body td.small-offset-9,
      table.body th.small-offset-9 {
        margin-left: 75% !important;
        Margin-left: 75% !important;
      }
      table.body td.small-offset-10,
      table.body th.small-offset-10 {
        margin-left: 83.33333% !important;
        Margin-left: 83.33333% !important;
      }
      table.body td.small-offset-11,
      table.body th.small-offset-11 {
        margin-left: 91.66667% !important;
        Margin-left: 91.66667% !important;
      }
      table.body table.columns td.expander,
      table.body table.columns th.expander {
        display: none !important;
      }
      table.body .right-text-pad,
      table.body .text-pad-right {
        padding-left: 10px !important;
      }
      table.body .left-text-pad,
      table.body .text-pad-left {
        padding-right: 10px !important;
      }
      table.menu {
        width: 100% !important;
      }
      table.menu td,
      table.menu th {
        width: auto !important;
        display: inline-block !important;
      }
      table.menu.vertical td,
      table.menu.vertical th,
      table.menu.small-vertical td,
      table.menu.small-vertical th {
        display: block !important;
      }
      table.menu[align="center"] {
        width: auto !important;
      }
      table.button.small-expand,
      table.button.small-expanded {
        width: 100% !important;
      }
      table.button.small-expand table,
      table.button.small-expanded table {
        width: 100%;
      }
      table.button.small-expand table a,
      table.button.small-expanded table a {
        text-align: center !important;
        width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.button.small-expand center,
      table.button.small-expanded center {
        min-width: 0;
      }
    }
  </style>
  <!-- <style> -->
  <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
    <tbody>
      <tr style="padding: 0; text-align: left; vertical-align: top;">
        <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
          <center data-parsed="" style="min-width: 580px; width: 100%;">
<table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                            <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                          </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                    <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData['usrName'].',</h2>
                                    <p style="Margin: 0; Margin-bottom: 16px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 16px; padding: 0; text-align: left;">
                                      Your profile at Study.Net has been updated.  You are now affiliated with <strong>'.$messageData['schName'].'</strong> as a general (student) user.  Please open the “Store” link to view all of the courses available to students with this affiliation.</p>
                                    <p style="Margin: 0; Margin-bottom: 16px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 16px; padding: 0; text-align: left;">
                                      Your request for instructor status at <strong>'.$messageData['schName'].'</strong> is pending approval. This process is normally completed within 24 hours, after which you’ll receive an email confirmation.  
                                    </p>
                                    <p style="Margin: 0; Margin-bottom: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 0; padding: 0; text-align: left;">
If you have any questions, at any time, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.
                                    </p>
                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                </tr>
                              </tbody>
                            </table>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                    <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
<td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                            <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>
                                          </th>
                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </center>
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html>';
        return $strBody;
    }

    function cordOpted($messageData){
        $strBody='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Study.Net - Coordinator Affiliation</title>
</head>

<body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
  <style>
    @media only screen {
      html {
        min-height: 100%;
        background: #f3f3f3;
      }
    }
    
    @media only screen and (max-width: 596px) {
      .small-float-center {
        margin: 0 auto !important;
        float: none !important;
        text-align: center !important;
      }
      .small-text-center {
        text-align: center !important;
      }
      .small-text-left {
        text-align: left !important;
      }
      .small-text-right {
        text-align: right !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      .hide-for-large {
        display: block !important;
        width: auto !important;
        overflow: visible !important;
        max-height: none !important;
        font-size: inherit !important;
        line-height: inherit !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body table.container .hide-for-large,
      table.body table.container .row.hide-for-large {
        display: table !important;
        width: 100% !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body table.container .callout-inner.hide-for-large {
        display: table-cell !important;
        width: 100% !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body table.container .show-for-large {
        display: none !important;
        width: 0;
        mso-hide: all;
        overflow: hidden;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body img {
        width: auto;
        height: auto;
      }
      table.body center {
        min-width: 0 !important;
      }
      table.body .container {
        width: 95% !important;
      }
      table.body .columns,
      table.body .column {
        height: auto !important;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding-left: 16px !important;
        padding-right: 16px !important;
      }
      table.body .columns .column,
      table.body .columns .columns,
      table.body .column .column,
      table.body .column .columns {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.body .collapse .columns,
      table.body .collapse .column {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      td.small-1,
      th.small-1 {
        display: inline-block !important;
        width: 8.33333% !important;
      }
      td.small-2,
      th.small-2 {
        display: inline-block !important;
        width: 16.66667% !important;
      }
      td.small-3,
      th.small-3 {
        display: inline-block !important;
        width: 25% !important;
      }
      td.small-4,
      th.small-4 {
        display: inline-block !important;
        width: 33.33333% !important;
      }
      td.small-5,
      th.small-5 {
        display: inline-block !important;
        width: 41.66667% !important;
      }
      td.small-6,
      th.small-6 {
        display: inline-block !important;
        width: 50% !important;
      }
      td.small-7,
      th.small-7 {
        display: inline-block !important;
        width: 58.33333% !important;
      }
      td.small-8,
      th.small-8 {
        display: inline-block !important;
        width: 66.66667% !important;
      }
      td.small-9,
      th.small-9 {
        display: inline-block !important;
        width: 75% !important;
      }
      td.small-10,
      th.small-10 {
        display: inline-block !important;
        width: 83.33333% !important;
      }
      td.small-11,
      th.small-11 {
        display: inline-block !important;
        width: 91.66667% !important;
      }
      td.small-12,
      th.small-12 {
        display: inline-block !important;
        width: 100% !important;
      }
      .columns td.small-12,
      .column td.small-12,
      .columns th.small-12,
      .column th.small-12 {
        display: block !important;
        width: 100% !important;
      }
      table.body td.small-offset-1,
      table.body th.small-offset-1 {
        margin-left: 8.33333% !important;
        Margin-left: 8.33333% !important;
      }
      table.body td.small-offset-2,
      table.body th.small-offset-2 {
        margin-left: 16.66667% !important;
        Margin-left: 16.66667% !important;
      }
      table.body td.small-offset-3,
      table.body th.small-offset-3 {
        margin-left: 25% !important;
        Margin-left: 25% !important;
      }
      table.body td.small-offset-4,
      table.body th.small-offset-4 {
        margin-left: 33.33333% !important;
        Margin-left: 33.33333% !important;
      }
      table.body td.small-offset-5,
      table.body th.small-offset-5 {
        margin-left: 41.66667% !important;
        Margin-left: 41.66667% !important;
      }
      table.body td.small-offset-6,
      table.body th.small-offset-6 {
        margin-left: 50% !important;
        Margin-left: 50% !important;
      }
      table.body td.small-offset-7,
      table.body th.small-offset-7 {
        margin-left: 58.33333% !important;
        Margin-left: 58.33333% !important;
      }
      table.body td.small-offset-8,
      table.body th.small-offset-8 {
        margin-left: 66.66667% !important;
        Margin-left: 66.66667% !important;
      }
      table.body td.small-offset-9,
      table.body th.small-offset-9 {
        margin-left: 75% !important;
        Margin-left: 75% !important;
      }
      table.body td.small-offset-10,
      table.body th.small-offset-10 {
        margin-left: 83.33333% !important;
        Margin-left: 83.33333% !important;
      }
      table.body td.small-offset-11,
      table.body th.small-offset-11 {
        margin-left: 91.66667% !important;
        Margin-left: 91.66667% !important;
      }
      table.body table.columns td.expander,
      table.body table.columns th.expander {
        display: none !important;
      }
      table.body .right-text-pad,
      table.body .text-pad-right {
        padding-left: 10px !important;
      }
      table.body .left-text-pad,
      table.body .text-pad-left {
        padding-right: 10px !important;
      }
      table.menu {
        width: 100% !important;
      }
      table.menu td,
      table.menu th {
        width: auto !important;
        display: inline-block !important;
      }
      table.menu.vertical td,
      table.menu.vertical th,
      table.menu.small-vertical td,
      table.menu.small-vertical th {
        display: block !important;
      }
      table.menu[align="center"] {
        width: auto !important;
      }
      table.button.small-expand,
      table.button.small-expanded {
        width: 100% !important;
      }
      table.button.small-expand table,
      table.button.small-expanded table {
        width: 100%;
      }
      table.button.small-expand table a,
      table.button.small-expanded table a {
        text-align: center !important;
        width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.button.small-expand center,
      table.button.small-expanded center {
        min-width: 0;
      }
    }
  </style>
  <!-- <style> -->
  <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
    <tbody>
      <tr style="padding: 0; text-align: left; vertical-align: top;">
        <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
          <center data-parsed="" style="min-width: 580px; width: 100%;">
<table class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;" bgcolor="#101010" align="center">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;" align="center">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-6 large-6 columns first" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;" width="150">                                            </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="small-6 large-6 columns last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;" valign="middle">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                            <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                          </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                    <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi '.$messageData['usrName'].',</h2>
                                    <p style="Margin: 0; Margin-bottom: 16px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 16px; padding: 0; text-align: left;">
                                      Your profile at Study.Net has been updated.  You are now affiliated with <strong>'.$messageData['schName'].'</strong> as a general (student) user.  Please open the “Store” link to view all of the courses available to students with this affiliation.</p>
                                    <p style="Margin: 0; Margin-bottom: 16px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 16px; padding: 0; text-align: left;">
                                      Your request for coordinator status at <strong>'.$messageData['schName'].'</strong> is pending approval. This process is normally completed within 24 hours, after which you’ll receive an email confirmation.  
                                    </p>
                                    <p style="Margin: 0; Margin-bottom: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 0; padding: 0; text-align: left;">
If you have any questions, at any time, please send a message to: <a href="mailto:customerservice@study.net">customerservice@study.net</a>.  We will respond as quickly as possible.
                                    </p>
                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                </tr>
                              </tbody>
                            </table>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                    <table class="wrapper secondary" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;" align="center">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
<td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; padding-top: 24px;">
                                            <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>
                                          </th>
                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </center>
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html>';
        return $strBody;
    }

    function emailAffilSchOrg($messageData)
    {
        $html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Study.Net - Affiliation Applied</title>
</head>

<body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
  <style>
    @media only screen {
      html {
        min-height: 100%;
        background: #f3f3f3;
      }
    }
    
    @media only screen and (max-width: 596px) {
      .small-float-center {
        margin: 0 auto !important;
        float: none !important;
        text-align: center !important;
      }
      .small-text-center {
        text-align: center !important;
      }
      .small-text-left {
        text-align: left !important;
      }
      .small-text-right {
        text-align: right !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      .hide-for-large {
        display: block !important;
        width: auto !important;
        overflow: visible !important;
        max-height: none !important;
        font-size: inherit !important;
        line-height: inherit !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body table.container .hide-for-large,
      table.body table.container .row.hide-for-large {
        display: table !important;
        width: 100% !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body table.container .callout-inner.hide-for-large {
        display: table-cell !important;
        width: 100% !important;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body table.container .show-for-large {
        display: none !important;
        width: 0;
        mso-hide: all;
        overflow: hidden;
      }
    }
    
    @media only screen and (max-width: 596px) {
      table.body img {
        width: auto;
        height: auto;
      }
      table.body center {
        min-width: 0 !important;
      }
      table.body .container {
        width: 95% !important;
      }
      table.body .columns,
      table.body .column {
        height: auto !important;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding-left: 16px !important;
        padding-right: 16px !important;
      }
      table.body .columns .column,
      table.body .columns .columns,
      table.body .column .column,
      table.body .column .columns {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.body .collapse .columns,
      table.body .collapse .column {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      td.small-1,
      th.small-1 {
        display: inline-block !important;
        width: 8.33333% !important;
      }
      td.small-2,
      th.small-2 {
        display: inline-block !important;
        width: 16.66667% !important;
      }
      td.small-3,
      th.small-3 {
        display: inline-block !important;
        width: 25% !important;
      }
      td.small-4,
      th.small-4 {
        display: inline-block !important;
        width: 33.33333% !important;
      }
      td.small-5,
      th.small-5 {
        display: inline-block !important;
        width: 41.66667% !important;
      }
      td.small-6,
      th.small-6 {
        display: inline-block !important;
        width: 50% !important;
      }
      td.small-7,
      th.small-7 {
        display: inline-block !important;
        width: 58.33333% !important;
      }
      td.small-8,
      th.small-8 {
        display: inline-block !important;
        width: 66.66667% !important;
      }
      td.small-9,
      th.small-9 {
        display: inline-block !important;
        width: 75% !important;
      }
      td.small-10,
      th.small-10 {
        display: inline-block !important;
        width: 83.33333% !important;
      }
      td.small-11,
      th.small-11 {
        display: inline-block !important;
        width: 91.66667% !important;
      }
      td.small-12,
      th.small-12 {
        display: inline-block !important;
        width: 100% !important;
      }
      .columns td.small-12,
      .column td.small-12,
      .columns th.small-12,
      .column th.small-12 {
        display: block !important;
        width: 100% !important;
      }
      table.body td.small-offset-1,
      table.body th.small-offset-1 {
        margin-left: 8.33333% !important;
        Margin-left: 8.33333% !important;
      }
      table.body td.small-offset-2,
      table.body th.small-offset-2 {
        margin-left: 16.66667% !important;
        Margin-left: 16.66667% !important;
      }
      table.body td.small-offset-3,
      table.body th.small-offset-3 {
        margin-left: 25% !important;
        Margin-left: 25% !important;
      }
      table.body td.small-offset-4,
      table.body th.small-offset-4 {
        margin-left: 33.33333% !important;
        Margin-left: 33.33333% !important;
      }
      table.body td.small-offset-5,
      table.body th.small-offset-5 {
        margin-left: 41.66667% !important;
        Margin-left: 41.66667% !important;
      }
      table.body td.small-offset-6,
      table.body th.small-offset-6 {
        margin-left: 50% !important;
        Margin-left: 50% !important;
      }
      table.body td.small-offset-7,
      table.body th.small-offset-7 {
        margin-left: 58.33333% !important;
        Margin-left: 58.33333% !important;
      }
      table.body td.small-offset-8,
      table.body th.small-offset-8 {
        margin-left: 66.66667% !important;
        Margin-left: 66.66667% !important;
      }
      table.body td.small-offset-9,
      table.body th.small-offset-9 {
        margin-left: 75% !important;
        Margin-left: 75% !important;
      }
      table.body td.small-offset-10,
      table.body th.small-offset-10 {
        margin-left: 83.33333% !important;
        Margin-left: 83.33333% !important;
      }
      table.body td.small-offset-11,
      table.body th.small-offset-11 {
        margin-left: 91.66667% !important;
        Margin-left: 91.66667% !important;
      }
      table.body table.columns td.expander,
      table.body table.columns th.expander {
        display: none !important;
      }
      table.body .right-text-pad,
      table.body .text-pad-right {
        padding-left: 10px !important;
      }
      table.body .left-text-pad,
      table.body .text-pad-left {
        padding-right: 10px !important;
      }
      table.menu {
        width: 100% !important;
      }
      table.menu td,
      table.menu th {
        width: auto !important;
        display: inline-block !important;
      }
      table.menu.vertical td,
      table.menu.vertical th,
      table.menu.small-vertical td,
      table.menu.small-vertical th {
        display: block !important;
      }
      table.menu[align="center"] {
        width: auto !important;
      }
      table.button.small-expand,
      table.button.small-expanded {
        width: 100% !important;
      }
      table.button.small-expand table,
      table.button.small-expanded table {
        width: 100%;
      }
      table.button.small-expand table a,
      table.button.small-expanded table a {
        text-align: center !important;
        width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.button.small-expand center,
      table.button.small-expanded center {
        min-width: 0;
      }
    }
  </style>
  <!-- <style> -->
  <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
    <tbody>
      <tr style="padding: 0; text-align: left; vertical-align: top;">
        <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
          <center data-parsed="" style="min-width: 580px; width: 100%;">
            <table bgcolor="#101010" align="center" class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table align="center" class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-6 large-6 columns first" valign="middle" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" width="150" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;">                                            </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="small-6 large-6 columns last" valign="middle" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                          </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
            <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                    <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi ' . $messageData['usrName'] . ',</h2>
                                    <p class="lead" style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">You are now affiliated with the school or organization noted below.</p>
                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table class="callout" style="Margin-bottom: 16px; border-collapse: collapse; border-spacing: 0; margin-bottom: 16px; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th class="callout-inner primary" style="Margin: 0; background-color: #eaf6fc; border: none; border-top: 6px solid #33ace0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 16px; text-align: left; width: 100%;">
                                            <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                            ' . $messageData['usrName'] . '
                                            </p>
                                            <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">
                                              ' . $messageData['usrEmail'] . '
                                            </p>
                                            <p style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 0; padding: 0; text-align: left;">
                                              ' . $messageData['schName'] . '<br>
                                              <small style="font-size: 80%; text-transform: uppercase;">Student</small>
                                            </p>
                                          </th>
                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                  <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                </tr>
                              </tbody>
                            </table>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                    <table class="wrapper secondary" align="center" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                            <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                            <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;"><small style="font-size: 80%;">&copy;' . date("Y") . ' Study.Net</small></p>
                                            <p class="text-center" style="Margin: 0; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;"><a href="mailto:customerservice@study.net" style="Margin: 0; color: #2199e8; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: none;">customerservice@study.net</a></small></p>
                                          </th>
                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </center>
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html>';
        return $html;
    }


    function emailAddRemoveMatInst($data, $mode)
    {

        $strBody = "";

        if ($mode == 'add') {
            $action = 'added';
            $text = 'added to';
        } else {
            $action = 'removed';
	        $text = 'removed from';
        }

        $strBody .=

            '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                
                <head>
                  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                  <meta name="viewport" content="width=device-width">
                  <title>Study.Net - Material Update</title>
                </head>
                
                <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                  <style>
                    @media only screen {
                      html {
                        min-height: 100%;
                        background: #f3f3f3;
                      }
                    }
                    
                    @media only screen and (max-width: 596px) {
                      .small-float-center {
                        margin: 0 auto !important;
                        float: none !important;
                        text-align: center !important;
                      }
                      .small-text-center {
                        text-align: center !important;
                      }
                      .small-text-left {
                        text-align: left !important;
                      }
                      .small-text-right {
                        text-align: right !important;
                      }
                    }
                    
                    @media only screen and (max-width: 596px) {
                      .hide-for-large {
                        display: block !important;
                        width: auto !important;
                        overflow: visible !important;
                        max-height: none !important;
                        font-size: inherit !important;
                        line-height: inherit !important;
                      }
                    }
                    
                    @media only screen and (max-width: 596px) {
                      table.body table.container .hide-for-large,
                      table.body table.container .row.hide-for-large {
                        display: table !important;
                        width: 100% !important;
                      }
                    }
                    
                    @media only screen and (max-width: 596px) {
                      table.body table.container .callout-inner.hide-for-large {
                        display: table-cell !important;
                        width: 100% !important;
                      }
                    }
                    
                    @media only screen and (max-width: 596px) {
                      table.body table.container .show-for-large {
                        display: none !important;
                        width: 0;
                        mso-hide: all;
                        overflow: hidden;
                      }
                    }
                    
                    @media only screen and (max-width: 596px) {
                      table.body img {
                        width: auto;
                        height: auto;
                      }
                      table.body center {
                        min-width: 0 !important;
                      }
                      table.body .container {
                        width: 95% !important;
                      }
                      table.body .columns,
                      table.body .column {
                        height: auto !important;
                        -moz-box-sizing: border-box;
                        -webkit-box-sizing: border-box;
                        box-sizing: border-box;
                        padding-left: 16px !important;
                        padding-right: 16px !important;
                      }
                      table.body .columns .column,
                      table.body .columns .columns,
                      table.body .column .column,
                      table.body .column .columns {
                        padding-left: 0 !important;
                        padding-right: 0 !important;
                      }
                      table.body .collapse .columns,
                      table.body .collapse .column {
                        padding-left: 0 !important;
                        padding-right: 0 !important;
                      }
                      td.small-1,
                      th.small-1 {
                        display: inline-block !important;
                        width: 8.33333% !important;
                      }
                      td.small-2,
                      th.small-2 {
                        display: inline-block !important;
                        width: 16.66667% !important;
                      }
                      td.small-3,
                      th.small-3 {
                        display: inline-block !important;
                        width: 25% !important;
                      }
                      td.small-4,
                      th.small-4 {
                        display: inline-block !important;
                        width: 33.33333% !important;
                      }
                      td.small-5,
                      th.small-5 {
                        display: inline-block !important;
                        width: 41.66667% !important;
                      }
                      td.small-6,
                      th.small-6 {
                        display: inline-block !important;
                        width: 50% !important;
                      }
                      td.small-7,
                      th.small-7 {
                        display: inline-block !important;
                        width: 58.33333% !important;
                      }
                      td.small-8,
                      th.small-8 {
                        display: inline-block !important;
                        width: 66.66667% !important;
                      }
                      td.small-9,
                      th.small-9 {
                        display: inline-block !important;
                        width: 75% !important;
                      }
                      td.small-10,
                      th.small-10 {
                        display: inline-block !important;
                        width: 83.33333% !important;
                      }
                      td.small-11,
                      th.small-11 {
                        display: inline-block !important;
                        width: 91.66667% !important;
                      }
                      td.small-12,
                      th.small-12 {
                        display: inline-block !important;
                        width: 100% !important;
                      }
                      .columns td.small-12,
                      .column td.small-12,
                      .columns th.small-12,
                      .column th.small-12 {
                        display: block !important;
                        width: 100% !important;
                      }
                      table.body td.small-offset-1,
                      table.body th.small-offset-1 {
                        margin-left: 8.33333% !important;
                        Margin-left: 8.33333% !important;
                      }
                      table.body td.small-offset-2,
                      table.body th.small-offset-2 {
                        margin-left: 16.66667% !important;
                        Margin-left: 16.66667% !important;
                      }
                      table.body td.small-offset-3,
                      table.body th.small-offset-3 {
                        margin-left: 25% !important;
                        Margin-left: 25% !important;
                      }
                      table.body td.small-offset-4,
                      table.body th.small-offset-4 {
                        margin-left: 33.33333% !important;
                        Margin-left: 33.33333% !important;
                      }
                      table.body td.small-offset-5,
                      table.body th.small-offset-5 {
                        margin-left: 41.66667% !important;
                        Margin-left: 41.66667% !important;
                      }
                      table.body td.small-offset-6,
                      table.body th.small-offset-6 {
                        margin-left: 50% !important;
                        Margin-left: 50% !important;
                      }
                      table.body td.small-offset-7,
                      table.body th.small-offset-7 {
                        margin-left: 58.33333% !important;
                        Margin-left: 58.33333% !important;
                      }
                      table.body td.small-offset-8,
                      table.body th.small-offset-8 {
                        margin-left: 66.66667% !important;
                        Margin-left: 66.66667% !important;
                      }
                      table.body td.small-offset-9,
                      table.body th.small-offset-9 {
                        margin-left: 75% !important;
                        Margin-left: 75% !important;
                      }
                      table.body td.small-offset-10,
                      table.body th.small-offset-10 {
                        margin-left: 83.33333% !important;
                        Margin-left: 83.33333% !important;
                      }
                      table.body td.small-offset-11,
                      table.body th.small-offset-11 {
                        margin-left: 91.66667% !important;
                        Margin-left: 91.66667% !important;
                      }
                      table.body table.columns td.expander,
                      table.body table.columns th.expander {
                        display: none !important;
                      }
                      table.body .right-text-pad,
                      table.body .text-pad-right {
                        padding-left: 10px !important;
                      }
                      table.body .left-text-pad,
                      table.body .text-pad-left {
                        padding-right: 10px !important;
                      }
                      table.menu {
                        width: 100% !important;
                      }
                      table.menu td,
                      table.menu th {
                        width: auto !important;
                        display: inline-block !important;
                      }
                      table.menu.vertical td,
                      table.menu.vertical th,
                      table.menu.small-vertical td,
                      table.menu.small-vertical th {
                        display: block !important;
                      }
                      table.menu[align="center"] {
                        width: auto !important;
                      }
                      table.button.small-expand,
                      table.button.small-expanded {
                        width: 100% !important;
                      }
                      table.button.small-expand table,
                      table.button.small-expanded table {
                        width: 100%;
                      }
                      table.button.small-expand table a,
                      table.button.small-expanded table a {
                        text-align: center !important;
                        width: 100% !important;
                        padding-left: 0 !important;
                        padding-right: 0 !important;
                      }
                      table.button.small-expand center,
                      table.button.small-expanded center {
                        min-width: 0;
                      }
                    }
                  </style>
                  <!-- <style> -->
                  <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                    <tbody>
                      <tr style="padding: 0; text-align: left; vertical-align: top;">
                        <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                          <center data-parsed="" style="min-width: 580px; width: 100%;">
                            <table bgcolor="#101010" align="center" class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                    <table align="center" class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                            <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <th class="small-6 large-6 columns first" valign="middle" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;">
                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> <img src="http://snphp.study.net/assets/img/sn-logo.png" width="150" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;">                                            </th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </th>
                                                  <th class="small-6 large-6 columns last" valign="middle" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;">
                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;">
                                                            <!--<small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small>-->
                                                          </th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </th>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                            <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                    <!--<h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi [FirstName LastName],</h2>
                                                    <p class="lead" style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">Recently you initiated a password reset.<br/><br/>Click the link below to continue.</p>-->
                                                    <table class="callout" style="Margin-bottom: 0; border-collapse: collapse; border-spacing: 0; margin-bottom: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th class="callout-inner success" style="Margin: 0; background-color: #fff; border: none; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 0 0 0; text-align: left; width: 100%;">
                
                                                            <table style="border-collapse: collapse; border-spacing: 0; margin-top: 0px; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word; padding-bottom: 12px;">
                                                                      <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">
                                                                        Content Bundle Update
                                                                      </h2>
                                                                  </td>
                                                                </tr>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                                    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                        <tr>
                                                                            <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; padding-bottom:0; padding-right:12px;">' . $data["Crs_Name"] . '
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; padding-top:0; padding-bottom:5px; padding-right:12px; font-size:12px;">
                                                                                <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                                    <tr>
                                                                                        <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; color: #000; padding-bottom:8px">
                                                                                            ' . $data["Sch_Name"] . '
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; color: #999">
                                                                                            Instructor: ' . $data["Inst_Name"] . '
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; color: #999">
                                                                                            Content Bundle ID: ' . $data["Crs_Code"] . '
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                  </td>
                                                                </tr>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size:13px; line-height: 1; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;  padding-top:24px;  ">
                                                                    The following material(s) have been '.$text.' this ' . $data["Crs_Type"] . ' by the instructor:
                                                                  </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding-top:16px; padding-bottom: 2px; font-family: Helvetica, Arial, sans-serif; width:100%;" colspan="2">
                                                                        <table role="presentation" aria-hidden="true" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                              <tr>
                                                                                <td style="font-family: Helvetica, Arial, sans-serif; font-size:13px; padding-top:4px; padding-bottom:8px; padding-right:12px; width: 66.666666%; ">
                                                                                        ' . $data["Mat_Name"] . '
                                                                                </td>
                                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:8px; padding-right:12px;  text-align:right; width:33.333333%; color: #999; font-size:13px; line-height: 1; color: #a94442;">
                                                                                Material ' . $action . '
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                      </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                  <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size:13px; line-height: 1; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;  padding-top:16px; padding-bottom: 16px;  ">
                                                                        Please login to <a href="https://study.net" target="_blank" style="color: #101010;">Study.Net</a> to view this [Course].
                                                                    </td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                
                                                          </th>
                                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </th>
                                                  <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </th>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table class="wrapper secondary" align="center" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                            <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                              <tbody>
                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                  <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                      <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                          <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                            <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                              <tbody>
                                                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                  <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                            <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>
                                                            <p class="text-center" style="Margin: 0; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;"><a href="mailto:customerservice@study.net" style="Margin: 0; color: #2199e8; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: none;">customerservice@study.net</a></small></p>
                                                          </th>
                                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </th>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </center>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                
                </body>
                
                </html>';
        return $strBody;
    }


    function emailAddRemoveMatInstCS($data, $mode)
    {
        //$data should be passed as an array while being called

        $text = ($mode == "rem" ? "removed from" : "added to");

        $row_data = '';

        foreach ($data as $row) {
            $row_data .= '<tr>
                            <td style="font-family: Helvetica, Arial, sans-serif; font-size:13px; padding-top:4px; padding-bottom:8px; padding-right:12px; width: 66.666666%; ">' . $row["Mat_Name"] . '</td>
                            <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:8px; padding-right:12px;  text-align:right; width:33.333333%; color: #999; font-size:13px; line-height: 1; color: green; text-align: center">' . $row["Mat_ID"] . '</td>
                        </tr>';
        }
        $strBody = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml">
                        <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                            <meta name="viewport" content="width=device-width">
                            <title>Study.Net - Material Update</title>
                        </head>
                        <body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important;">
                            <style>@media only screen {
                        html {
                            min-height: 100%;
                            background: #f3f3f3;
                        }
                    }
                    
                    @media only screen and (max-width: 596px) {
                        .small-float-center {
                            margin: 0 auto !important;
                            float: none !important;
                            text-align: center !important;
                        }
                    
                        .small-text-center {
                            text-align: center !important;
                        }
                    
                        .small-text-left {
                            text-align: left !important;
                        }
                    
                        .small-text-right {
                            text-align: right !important;
                        }
                    }
                    
                    @media only screen and (max-width: 596px) {
                        .hide-for-large {
                            display: block !important;
                            width: auto !important;
                            overflow: visible !important;
                            max-height: none !important;
                            font-size: inherit !important;
                            line-height: inherit !important;
                        }
                    }
                    
                    @media only screen and (max-width: 596px) {
                        table.body table.container .hide-for-large,
                        table.body table.container .row.hide-for-large {
                            display: table !important;
                            width: 100% !important;
                        }
                    }
                    
                    @media only screen and (max-width: 596px) {
                        table.body table.container .callout-inner.hide-for-large {
                            display: table-cell !important;
                            width: 100% !important;
                        }
                    }
                    
                    @media only screen and (max-width: 596px) {
                        table.body table.container .show-for-large {
                            display: none !important;
                            width: 0;
                            mso-hide: all;
                            overflow: hidden;
                        }
                    }
                    
                    @media only screen and (max-width: 596px) {
                        table.body img {
                            width: auto;
                            height: auto;
                        }
                    
                        table.body center {
                            min-width: 0 !important;
                        }
                    
                        table.body .container {
                            width: 95% !important;
                        }
                    
                        table.body .columns,
                        table.body .column {
                            height: auto !important;
                            -moz-box-sizing: border-box;
                            -webkit-box-sizing: border-box;
                            box-sizing: border-box;
                            padding-left: 16px !important;
                            padding-right: 16px !important;
                        }
                    
                        table.body .columns .column,
                        table.body .columns .columns,
                        table.body .column .column,
                        table.body .column .columns {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                        }
                    
                        table.body .collapse .columns,
                        table.body .collapse .column {
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                        }
                    
                        td.small-1,
                        th.small-1 {
                            display: inline-block !important;
                            width: 8.33333% !important;
                        }
                    
                        td.small-2,
                        th.small-2 {
                            display: inline-block !important;
                            width: 16.66667% !important;
                        }
                    
                        td.small-3,
                        th.small-3 {
                            display: inline-block !important;
                            width: 25% !important;
                        }
                    
                        td.small-4,
                        th.small-4 {
                            display: inline-block !important;
                            width: 33.33333% !important;
                        }
                    
                        td.small-5,
                        th.small-5 {
                            display: inline-block !important;
                            width: 41.66667% !important;
                        }
                    
                        td.small-6,
                        th.small-6 {
                            display: inline-block !important;
                            width: 50% !important;
                        }
                    
                        td.small-7,
                        th.small-7 {
                            display: inline-block !important;
                            width: 58.33333% !important;
                        }
                    
                        td.small-8,
                        th.small-8 {
                            display: inline-block !important;
                            width: 66.66667% !important;
                        }
                    
                        td.small-9,
                        th.small-9 {
                            display: inline-block !important;
                            width: 75% !important;
                        }
                    
                        td.small-10,
                        th.small-10 {
                            display: inline-block !important;
                            width: 83.33333% !important;
                        }
                    
                        td.small-11,
                        th.small-11 {
                            display: inline-block !important;
                            width: 91.66667% !important;
                        }
                    
                        td.small-12,
                        th.small-12 {
                            display: inline-block !important;
                            width: 100% !important;
                        }
                    
                        .columns td.small-12,
                        .column td.small-12,
                        .columns th.small-12,
                        .column th.small-12 {
                            display: block !important;
                            width: 100% !important;
                        }
                    
                        table.body td.small-offset-1,
                        table.body th.small-offset-1 {
                            margin-left: 8.33333% !important;
                            Margin-left: 8.33333% !important;
                        }
                    
                        table.body td.small-offset-2,
                        table.body th.small-offset-2 {
                            margin-left: 16.66667% !important;
                            Margin-left: 16.66667% !important;
                        }
                    
                        table.body td.small-offset-3,
                        table.body th.small-offset-3 {
                            margin-left: 25% !important;
                            Margin-left: 25% !important;
                        }
                    
                        table.body td.small-offset-4,
                        table.body th.small-offset-4 {
                            margin-left: 33.33333% !important;
                            Margin-left: 33.33333% !important;
                        }
                    
                        table.body td.small-offset-5,
                        table.body th.small-offset-5 {
                            margin-left: 41.66667% !important;
                            Margin-left: 41.66667% !important;
                        }
                    
                        table.body td.small-offset-6,
                        table.body th.small-offset-6 {
                            margin-left: 50% !important;
                            Margin-left: 50% !important;
                        }
                    
                        table.body td.small-offset-7,
                        table.body th.small-offset-7 {
                            margin-left: 58.33333% !important;
                            Margin-left: 58.33333% !important;
                        }
                    
                        table.body td.small-offset-8,
                        table.body th.small-offset-8 {
                            margin-left: 66.66667% !important;
                            Margin-left: 66.66667% !important;
                        }
                    
                        table.body td.small-offset-9,
                        table.body th.small-offset-9 {
                            margin-left: 75% !important;
                            Margin-left: 75% !important;
                        }
                    
                        table.body td.small-offset-10,
                        table.body th.small-offset-10 {
                            margin-left: 83.33333% !important;
                            Margin-left: 83.33333% !important;
                        }
                    
                        table.body td.small-offset-11,
                        table.body th.small-offset-11 {
                            margin-left: 91.66667% !important;
                            Margin-left: 91.66667% !important;
                        }
                    
                        table.body table.columns td.expander,
                        table.body table.columns th.expander {
                            display: none !important;
                        }
                    
                        table.body .right-text-pad,
                        table.body .text-pad-right {
                            padding-left: 10px !important;
                        }
                    
                        table.body .left-text-pad,
                        table.body .text-pad-left {
                            padding-right: 10px !important;
                        }
                    
                        table.menu {
                            width: 100% !important;
                        }
                    
                        table.menu td,
                        table.menu th {
                            width: auto !important;
                            display: inline-block !important;
                        }
                    
                        table.menu.vertical td,
                        table.menu.vertical th,
                        table.menu.small-vertical td,
                        table.menu.small-vertical th {
                            display: block !important;
                        }
                    
                        table.menu[align="center"] {
                            width: auto !important;
                        }
                    
                        table.button.small-expand,
                        table.button.small-expanded {
                            width: 100% !important;
                        }
                    
                        table.button.small-expand table,
                        table.button.small-expanded table {
                            width: 100%;
                        }
                    
                        table.button.small-expand table a,
                        table.button.small-expanded table a {
                            text-align: center !important;
                            width: 100% !important;
                            padding-left: 0 !important;
                            padding-right: 0 !important;
                        }
                    
                        table.button.small-expand center,
                        table.button.small-expanded center {
                            min-width: 0;
                        }
                    }</style>
                            <!-- <style> -->
                            <table class="body" data-made-with-foundation="" style="Margin: 0; background: #f3f3f3; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; height: 100%; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                        <td class="float-center" align="center" valign="top" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0 auto; border-collapse: collapse !important; color: #0a0a0a; float: none; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; word-wrap: break-word;">
                                            <center data-parsed="" style="min-width: 580px; width: 100%;">
                                                <table bgcolor="#101010" align="center" class="wrapper header float-center" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 100%;">
                                                    <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                            <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 20px 20px 20px 20px; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                                <table align="center" class="container" style="Margin: 0 auto; background: #101010; border-collapse: collapse; border-spacing: 0; margin: 0 auto; padding: 0; text-align: inherit; vertical-align: top; width: 580px;">
                                                                    <tbody>
                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                            <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                                                <table class="row collapse" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                                                    <tbody>
                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                                            <th class="small-6 large-6 columns first" valign="middle" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;">
                                                                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                                                                    <tbody>
                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                                                            <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;"> 
                                                                                                                <img src="http://snphp.study.net/assets/img/sn-logo.png" width="150" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 120px; outline: none; text-decoration: none; width: auto;"> 
                                                                                                            </th>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </th>
                                                                                            <th class="small-6 large-6 columns last" valign="middle" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 0; padding-left: 0; padding-right: 0; text-align: left; width: 298px;">
                                                                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                                                                    <tbody>
                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                                                            <!--<th class="text-right" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: right;"> <small style="font-size: 80%;"><a href="#" style="display:none;Margin: 0; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: underline;">View Message Online</a></small> </th>-->
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table align="center" class="container  container-main float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 30px auto 0 auto; padding: 0; text-align: center; vertical-align: top; width: 580px;">
                                                    <tbody>
                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                            <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                                <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                                    <tbody>
                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                            <td height="32px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 32px; font-weight: normal; hyphens: auto; line-height: 32px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                                    <tbody>
                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                            <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                                                    <tbody>
                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                                            <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                                                                <!--<h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 24px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">Hi [FirstName LastName],</h2>
                                                        <p class="lead" style="Margin: 0; Margin-bottom: 10px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left;">Recently you initiated a password reset.<br/><br/>Click the link below to continue.</p>-->
                                                                                                <table class="callout" style="Margin-bottom: 0; border-collapse: collapse; border-spacing: 0; margin-bottom: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                                                                    <tbody>
                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                                                            <th class="callout-inner success" style="Margin: 0; background-color: #fff; border: none; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 0 0 0; text-align: left; width: 100%;">
                                                                                                                <table style="border-collapse: collapse; border-spacing: 0; margin-top: 0px; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                                                                                    <tbody>
                                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                                                                            <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word; padding-bottom: 12px;"> <h2 style="Margin: 0; Margin-bottom: 10px; color: inherit; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: normal; line-height: 1.3; margin: 0; margin-bottom: 10px; padding: 0; text-align: left; word-wrap: normal;">
                                                                            ' . ucfirst($data[0]["Crs_Type"]) . ' Update </h2> </td>
                                                                                                                        </tr>
                                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                                                                            <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                                                                                                <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                                                                                    <tr>
                                                                                                                                        <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; padding-bottom:0; padding-right:12px;">' . $data[0]["Crs_Name"] . '</td>
                                                                                                                                    </tr>
                                                                                                                                    <tr>
                                                                                                                                        <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; padding-top:0; padding-bottom:5px; padding-right:12px; font-size:12px;">
                                                                                                                                            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                                                                                                <tr>
                                                                                                                                                    <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; color: #000; padding-bottom:8px">' . $data[0]["Sch_Name"] . '</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr>
                                                                                                                                                    <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; color: #999">Instructor: ' . $data[0]["Inst_Name"] . '</td>
                                                                                                                                                </tr>
                                                                                                                                                <tr>
                                                                                                                                                    <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; color: #999">Content Bundle ID: ' . $data[0]["Crs_Code"] . '</td>
                                                                                                                                                </tr>
                                                                                                                                            </table>
                                                                                                                                        </td>
                                                                                                                                    </tr>
                                                                                                                                </table>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                                                                            <td style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size:13px; line-height: 1; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;  padding-top:24px;  ">The following material(s) have been '.$text.' this ' . $row["Crs_Type"] . ' by the instructor:</td>
                                                                                                                        </tr>
                                                                                                                        <tr>
                                                                                                                            <td style="padding-top:16px; padding-bottom: 2px; font-family: Helvetica, Arial, sans-serif; width:100%;" colspan="2">
                                                                                                                                <table role="presentation" aria-hidden="true" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                                                                    <tbody>
                                                                                                                                        <tr>
                                                                                                                                            <th style="text-align: left; padding-top:4px; padding-bottom:8px;">Product Name</th>
					                                                                                                                        <th style="text-align: center; padding-bottom:8px;">Product Number</th>
                                                                                                                                        </tr>																													 
                                                                                                                                        
                                                                                                                                        ' . $row_data . '
                                                                                                                                       
                                                                                                                                    </tbody>
                                                                                                                                </table>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr>
                    </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                            </th>
                                                                                                            <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </th>
                                                                                            <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </th>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="wrapper secondary" align="center" style="background: #f3f3f3; border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                                    <tbody>
                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                            <td class="wrapper-inner" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; hyphens: auto; line-height: 1.3; margin: 0; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">
                                                                                <table class="row collapsed footer" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                                                                    <tbody>
                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                                            <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 32px; padding-right: 32px; text-align: left; width: 564px;">
                                                                                                <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                                                                    <tbody>
                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                                                            <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left;">
                                                                                                                <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                                                                                    <tbody>
                                                                                                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                                                                                            <td height="16px" style="-moz-hyphens: auto; -webkit-hyphens: auto; Margin: 0; border-collapse: collapse !important; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; hyphens: auto; line-height: 16px; margin: 0; mso-line-height-rule: exactly; padding: 0; text-align: left; vertical-align: top; word-wrap: break-word;">&nbsp;</td>
                                                                                                                        </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                                <p class="text-center p-tight" style="Margin: 0 0 0 6px; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;">© 2019 Study.Net</small></p>
                                                                                                                <p class="text-center" style="Margin: 0; Margin-bottom: 6px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1; margin: 0 0 6px 0; margin-bottom: 6px; padding: 0; text-align: center;"><small style="font-size: 80%;"><a href="mailto:customerservice@study.net" style="Margin: 0; color: #2199e8; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 1.3; margin: 0; padding: 0; text-align: left; text-decoration: none;">customerservice@study.net</a></small></p>
                                                                                                            </th>
                                                                                                            <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 1.3; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </body>
                    </html>';

        /*$strBody .= '
                    Study.Net - Material '.$mode.' /n/n
                    Product ID:     '.$data["Mat_ID"].'/n
                    Product Name:   '.$data["Mat_Name"].'/n
                    Instructor:     '.$data["Inst_Name"].'/n
                    School:         '.$data["Sch_Name"].'/n
                    Course:         '.$data["Crs_Name"].'/n';*/

        return $strBody;
    }


    function emailAddCopyrightMatCS($data, $cp_data)
    {

        $strBody = '   
            <table cellpadding="0" cellspacing="0" width="100%" border="0">
                <tr>
                    <td>An instructor has requested Copyright Clearance for the following Material:</td>
                </tr>
            </table>
            
            <table cellpadding="0" cellspacing="0" width="100%" border="0">
                <tr>
                    <td style="padding-top:8px; padding-bottom:8px;">------</td>
                </tr>
            </table>
            
            <table cellpadding="0" cellspacing="0" width="100%" border="0">
                <tr>
                    <td>Instructor: ' . $data["Inst_Name"] . '</td>
                </tr>
                <tr>
                    <td>Course: ' . $data["Crs_Name"] . '</td>
                </tr>
                <tr>
                    <td>School: ' . $data["Sch_Name"] . '</td>
                </tr>
                <tr>
                    <td>Study&zwnj;.&zwnj;Net Material Identification Number: ' . $data["Mat_ID"] . '</td>
                </tr>
            </table>
            
            <table cellpadding="0" cellspacing="0" width="100%" border="0">
                <tr>
                    <td style="padding-top:8px; padding-bottom:8px;">------</td>
                </tr>
            </table>
            
            <table cellpadding="0" cellspacing="0" width="100%" border="0">
                <tr>
                    <td>Title: ' . $cp_data["CP_Title"] . '</td>
                </tr>
                <tr>
                    <td>Author: ' . $cp_data["CP_Author"] . '</td>
                </tr>
                <tr>
                    <td>Publisher: ' . $cp_data["CP_Publisher"] . '</td>
                </tr>
                <tr>
                    <td>ISBN /ISSN: ' . $cp_data["CP_ISBN"] . '
                    </td>
                </tr>
                <tr>
                    <td>Page Numbers: ' . $cp_data["CP_PageNums"] . '
                    </td>
                </tr>
                <tr>
                    <td>Date Published: ' . $cp_data["CP_PubDate"] . '</td>
                </tr>
                <tr>
                    <td>Approximate Number of Students Enrolled: ' . $data["Crs_ExpEnroll"] . '</td>
                </tr>
                <tr>
                    <td>Status: pending
                    </td>
                </tr>
            </table>';

        return $strBody;
    }

    public function generateEmailReceipt($ord_json, $ord_id)
    {
        $cartHlpObj = new HlpCart();
        $ord_details = json_decode($ord_json);
        //jb
        //hashing technique
        //create hash using orderid and salt
        //check the created hash against receipt hash
        $password1 = $ord_id;
        $salt = 'X+(E~:gG_Q9{EvPS';
        $order_hash = hash('sha256', $password1 . $salt);

        $strHtml = '
            <!DOCTYPE html>
            <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
            
            <head>
                <meta charset="utf-8"> <!-- utf-8 works for most cases -->
                <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn\'t be necessary -->
                <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
                <meta name="x-apple-disable-message-reformatting"> <!-- Disable auto-scale in iOS 10 Mail entirely -->
                <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->
            
                <!-- Web Font / @font-face : BEGIN -->
                <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->
            
                <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
                <!--[if mso]>
                    <style>
                        * {
                            font-family: sans-serif !important;
                        }
                    </style>
                <![endif]-->
            
                <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
                <!--[if !mso]><!-->
                <!-- insert web font reference, eg: <link href=\'https://fonts.googleapis.com/css?family=Roboto:400,700\' rel=\'stylesheet\' type=\'text/css\'> -->
                <!--<![endif]-->
            
                <!-- Web Font / @font-face : END -->
            
                <!-- CSS Reset -->
                <style>
                /* What it does: Remove spaces around the email design added by some email clients. */
                /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
                html,
                body {
                    margin: 0 auto !important;
                    padding: 0 !important;
                    height: 100% !important;
                    width: 100% !important;
                }
        
                /* What it does: Stops email clients resizing small text. */
                * {
                    -ms-text-size-adjust: 100%;
                    -webkit-text-size-adjust: 100%;
                }
        
                /* What it does: Centers email on Android 4.4 */
                div[style*="margin: 16px 0"] {
                    margin: 0 !important;
                }
        
                /* What it does: Stops Outlook from adding extra spacing to tables. */
                table,
                td {
                    mso-table-lspace: 0pt !important;
                    mso-table-rspace: 0pt !important;
                }
        
                /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
                table {
                    border-spacing: 0 !important;
                    border-collapse: collapse !important;
                    table-layout: fixed !important;
                    margin: 0 auto !important;
                }
        
                table table table {
                    table-layout: auto;
                }
        
                /* What it does: Uses a better rendering method when resizing images in IE. */
                img {
                    -ms-interpolation-mode: bicubic;
                }
        
                /* What it does: A work-around for iOS meddling in triggered links. */
                *[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: none !important;
                }
        
                /* What it does: A work-around for Gmail meddling in triggered links. */
                .x-gmail-data-detectors,
                .x-gmail-data-detectors *,
                .aBn {
                    border-bottom: 0 !important;
                    cursor: default !important;
                }
        
                /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
                .a6S {
                    display: none !important;
                    opacity: 0.01 !important;
                }
        
                /* If the above doesn\'t work, add a .g-img class to any image in question. */
                img.g-img+div {
                    display: none !important;
                }
        
                /* What it does: Prevents underlining the button text in Windows 10 */
                .button-link {
                    text-decoration: none !important;
                }
        
                /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
                /* Create one of these media queries for each additional viewport size you\'d like to fix */
                /* Thanks to Eric Lepetit (@ericlepetitsf) for help troubleshooting */
                @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
        
                    /* iPhone 6 and 6+ */
                    .email-container {
                        min-width: 375px !important;
                    }
                }
                </style>
                <!-- Progressive Enhancements -->
                <style>
                    /* What it does: Hover styles for buttons */
                    .button-td,
                    .button-a {
                        transition: all 100ms ease-in;
                    }
            
                    .button-td:hover,
                    .button-a:hover {
                        background: #555555 !important;
                        border-color: #555555 !important;
                    }
            
                    /* Media Queries */
                    @media screen and (max-width: 600px) {
            
                        /* What it does: Adjust typography on small screens to improve readability */
                        .email-container p {
                            font-size: 17px !important;
                            line-height: 22px !important;
                        }
            
                    }
                </style>
                <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
                <!--[if gte mso 9]>
                <xml>
                  <o:OfficeDocumentSettings>
                    <o:AllowPNG/>
                    <o:PixelsPerInch>96</o:PixelsPerInch>
                 </o:OfficeDocumentSettings>
                </xml>
                <![endif]-->
            </head>
            
            <body width="100%" bgcolor="#ffffff" style="margin: 0; mso-line-height-rule: exactly;">
            <center style="width: 100%; background: #ffffff; text-align: left;">
        
                <!-- Visually Hidden Preheader Text : BEGIN -->
                <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">
                    Your Study.Net Order Receipt for Order#:'.$ord_id.'
                </div>
                <!-- Visually Hidden Preheader Text : END -->
        
                <!--
                    Set the email width. Defined in two places:
                    1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 600px.
                    2. MSO tags for Desktop Windows Outlook enforce a 600px width.
                -->
                <div style="max-width: 600px; margin: auto;" class="email-container">
                    <!--[if mso]>
                    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="600" align="center">
                    <tr>
                    <td>
                    <![endif]-->
        
                    <!-- Email Header : BEGIN -->
                    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 600px;">
                        <tr>
                            <td bgcolor="#25373e" style="background-color:#25373e; padding: 10px 40px; text-align: left; font-family: sans-serif; font-size: 18px; line-height: 18px; color: #fff;">
                                <img src="http://snphp.study.net/assets/img/sn-logo.png" width="124" height="32">
                            </td>
                        </tr>
                    </table>
                    <!-- Email Header : END -->
        
                    <!-- Email Body : BEGIN -->
                    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 600px;">
        
                        <!-- 1 Column Text + Button : BEGIN -->
                        <tr>
                            <td bgcolor="#ffffff">
                                <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="padding: 40px 40px 20px 40px; font-family: sans-serif; font-size: 32px; line-height: 36px; color: #555555;">
                                            <h1 style="margin: 0 0 0 0; font-family: sans-serif; font-size: 32px; line-height: 36px; color: #333333; font-weight: 300;">Thank you for your order</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 40px 0 40px; font-family: sans-serif; font-size: 15px; line-height: 18px; color: #555555;">
                                            <h2 style="margin: 0 0 0 0; font-family: sans-serif; font-size: 15px; line-height: 18px; color: #333333; font-weight: bold;">Order ' . $ord_id . '</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 0 40px 10px 40px; font-family: sans-serif; font-size: 15px; line-height: 18px; color: #555555;">
                                            <h2 style="margin: 0 0 0 0; font-family: sans-serif; font-size: 15px; line-height: 18px; color: #333333; font-weight: bold;">' . $ord_details->ord_usr_data->Ord_Date . '</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 20px 40px 0 40px; font-family: sans-serif; font-size: 15px; line-height: 18px; color: #555555;">
                                            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                     <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; border-bottom:2px solid #ccc; color:#999; padding-bottom: 12px;">
                                                            <h2 style="margin: 0 0 0 0; font-family: sans-serif; font-size: 18px; line-height: 18px; color: #333333; font-weight: normal;">Order Details</h2>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>';

        foreach ($ord_details as $key => $value) {
            if ($key == "courses") {
                //echo $value[1]->Crs_ID;
                //echo(count($value));
                $ship=false;
                foreach ($value as $crs) {
                    $ship=strtolower($crs->Crs_txtPack_Ship=='y' && $crs->TxtPak_Ship_Opt!='pickup' )? true:$ship;

                    if($crs->Crs_txtPack_Ship=="y"){
                        $txtPak=
                            '<tr>
                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:5px; padding-right:12px;">Printed TEXTPAK&trade;</td>
                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:5px; padding-left:12px; padding-right:12px;  text-align:right; width:100px; color: #999;">$'.number_format($crs->ShopCartTextPrice, 2).'</td>
                                </tr>
                                <tr>
                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:5px; padding-right:12px; padding-left: 12px;">'.$cartHlpObj->getTextPakOptionName($crs->TxtPak_Bind_Opt).'</td>
                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:5px; padding-left:12px; padding-right:12px;  text-align:right; width:100px; color: #999;">$'.number_format($crs->TxtPak_Bind_Price, 2).'</td>
                                </tr>';
                        if($crs->TxtPak_Ship_Opt=="pickup"){
                            $txtPak.=
                                '<tr>
                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:5px; padding-right:12px; padding-left: 12px;">'.$cartHlpObj->getTextPakOptionName($crs->TxtPak_Ship_Opt).'</td>
                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:5px; padding-left:12px; padding-right:12px;  text-align:right; width:100px; color: #999;"></td>
                                </tr>
                                <tr>
                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:5px; padding-right:12px; padding-left: 12px; font-size: 12px; color: #999; font-style: italic; line-height: 1.22;" colspan="2">
                                    Your TEXTPAK™ order has been received for immediate processing. You will receive an email when your order is ready for pick up.
                                    </td>
                                </tr>';
                        }else{
                            $txtPak.='
                                <tr>
                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:5px; padding-right:12px; padding-left: 12px;">'.$cartHlpObj->getTextPakOptionName($crs->TxtPak_Ship_Opt).'</td>
                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:5px; padding-left:12px; padding-right:12px;  text-align:right; width:100px; color: #999;">$'.number_format($crs->TxtPak_Ship_Price,2).'</td>
                                </tr>';
                        }
                    }else{
                        $txtPak="";
                    }

                    if($crs->Discount > 0){
                        $coupon_applied=
                            '<tr>
                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:12px;  padding-right:12px; padding-left: 0; color: #999; text-align: right; font-size: 12px;">
                                        Coupon Applied
                                    </td>
                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:12px; padding-left:12px; padding-right:12px;  text-align:right; width:100px; color:#999; width:100px;">($' . number_format($crs->Discount, 2) . ')
                                    </td>
                                </tr>';
                    }else{
                        $coupon_applied="";
                    }
                    $crs_total=($crs->ShopCartCrsPrice+$crs->ShopCartTextPrice+$crs->TxtPak_Bind_Price+$crs->TxtPak_Ship_Price) - $crs->Discount;
                    $strHtml .= '
                                    <!-- CART ITEM 1-->
                                    <tr>
                                        <td style="padding:0 40px 0 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                                            <table style="width:100%; background-color:#ffffff; " cellpadding="0" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding-top:0; padding-bottom: 8px; font-family: Helvetica, Arial, sans-serif;" colspan="2">
                                                            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                <tr>
                                                                    <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; padding-top:12px; padding-bottom:5px; padding-right:12px;">'.$crs->Crs_Name.'
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; padding-top:0; padding-bottom:5px; padding-right:12px; font-size:12px; color:#999;">
                                                                        <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                                            <tr>
                                                                                <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; color: #999">
                                                                                    Instructor: '.$crs->Inst_Name.'
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="font-family: Helvetica, Arial, sans-serif; font-weight:bold; color: #999">
                                                                                    Content Bundle ID: '.$crs->Crs_Code.'
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:5px; padding-right:12px;">Digital Access to Content Bundle</td>
                                                        <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:5px; padding-left:12px; padding-right:12px;  text-align:right; width:100px; color: #999;">$'.number_format($crs->ShopCartCrsPrice,2).'</td>
                                                    </tr>';
                    $strHtml.=$txtPak;
                    $strHtml.=  '   <tr>
                                                        <td style="font-family: Helvetica, Arial, sans-serif; padding-top:4px; padding-bottom:0px; padding-right:0; padding-left: 0;" colspan="2">
                                                            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%" style="table-layout: auto;">';
                    $strHtml.=$coupon_applied;
                    $strHtml.=                  '<tr>
                                                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:12px; padding-bottom:12px; padding-right:12px; padding-left: 0; color: #333333; text-align: right; border-top:1px solid #f2f2f2; border-bottom:1px solid #999;">
                                                                        Total
                                                                    </td>
                                                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:12px; padding-bottom:12px; padding-right:12px; padding-left: 12px; color: #333333; text-align: right; border-top:1px solid #f2f2f2; border-bottom:1px solid #999; width:100px;">$'.number_format($crs_total,2).'</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>';
                }
            };
        }
        $strHtml .= '
                                    <!-- CART TOTAL-->
                                    <tr>
                                        <td style="padding:0 40px 0 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                                            <table style="width:100%; background-color:#ffffff; " cellpadding="0" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-family: Helvetica, Arial, sans-serif; padding-top:0; padding-bottom:0px; padding-right:0; padding-left: 0;" colspan="2">
                                                            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%" style="table-layout: auto;">
                                                                <tr>
                                                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:20px; padding-bottom:6px; padding-right:12px; padding-left: 0; color: #333333; text-align: right;">
                                                                        Sub-Total
                                                                    </td>
                                                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:20px; padding-bottom:6px; padding-right:12px; padding-left: 12px; color: #333333; text-align: right; width:100px;">$'.number_format($ord_details->totals->SubTotal, 2).'</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-family: Helvetica, Arial, sans-serif; padding-top:0; padding-bottom:0px; padding-right:0; padding-left: 0;" colspan="2">
                                                            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%" style="table-layout: auto;">
                                                                <tr>
                                                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:6px; padding-bottom:6px; padding-right:12px; padding-left: 0; color: #333333; text-align: right;">
                                                                        Sales Tax
                                                                    </td>
                                                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:6px; padding-bottom:6px; padding-right:12px; padding-left: 12px; color: #333333; text-align: right;  width:100px;">$' . number_format($ord_details->totals->TotalTax, 2) . '</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-family: Helvetica, Arial, sans-serif; padding-top:0; padding-right:0; padding-left: 0; border-bottom:2px solid #ccc;" colspan="2">
                                                            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%" style="table-layout: auto;">
                                                                <tr>
                                                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:6px; padding-bottom:20px; padding-right:12px; padding-left: 0; color: #333333; text-align: right; font-weight: bold;">
                                                                        Total
                                                                    </td>
                                                                    <td style="font-family: Helvetica, Arial, sans-serif; padding-top:6px; padding-bottom:20px; padding-right:12px; padding-left: 12px; color: #333333; text-align: right;  width:100px; font-weight: bold;">$' . number_format($ord_details->totals->Total, 2) . '</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>';
//                                     CART TOTAL

//                                     BILLING INFO
                            $ord_pay_type=strtolower($ord_details->ord_usr_data->Ord_CCType);
                            $ship_bill_disp= $ord_pay_type=='na' ? 'none': 'block';
                            $ship_disp= ($ship==false) ? 'none': 'block';
                            $bill_disp= ($ord_pay_type=='paypal') ? 'none': 'block';

                            $strHtml.='<tr style="display: '.$ship_bill_disp.'">
                                        <td style="padding:40px 40px 0 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; font-family: Helvetica, Arial, sans-serif;">
                                            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%" style="table-layout: auto;">
                                                <tr style=" border-bottom:2px solid #ccc">
                                                    <td style=" display:'.$bill_disp.' ;font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; font-family: Helvetica, Arial, sans-serif; padding-bottom:20px;">
                                                        <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%" style="table-layout: auto;">
                                                            <tr>
                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 6px; font-weight: bold;">Billing Address</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px;">
                                                                    ' . $ord_details->ord_usr_data->Usr_BFName . ' ' . $ord_details->ord_usr_data->Usr_BLName . '
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px;">
                                                                    ' . $ord_details->ord_usr_data->Usr_BAddress1 . '
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px;">
                                                                    ' . $ord_details->ord_usr_data->Usr_BAddress2 . '
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px;">
                                                                    ' . $ord_details->ord_usr_data->Usr_BCity . ', ' . $ord_details->ord_usr_data->Usr_BState . ' ' . $ord_details->ord_usr_data->Usr_BZip . '
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px;">
                                                                    ' . $ord_details->ord_usr_data->Usr_BCountry . '
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td style="display: '.$ship_disp.';font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; font-family: Helvetica, Arial, sans-serif; padding-bottom:20px;">
                                                        <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%" style="table-layout: auto;">
                                                            <tr>
                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 6px; font-weight: bold;">Shipping  Address</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px;">
                                                                    ' . $ord_details->ord_usr_data->Usr_FName . ' ' . $ord_details->ord_usr_data->Usr_LName . '
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px;">
                                                                    ' . $ord_details->ord_usr_data->Usr_SAddress1 . '
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px;">
                                                                    ' . $ord_details->ord_usr_data->Usr_SAddress2 . '
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px;">
                                                                    ' . $ord_details->ord_usr_data->Usr_SCity . ', ' . $ord_details->ord_usr_data->Usr_SState . ' ' . $ord_details->ord_usr_data->Usr_SZip . '
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px;">
                                                                    ' . $ord_details->ord_usr_data->Usr_SCountry . '
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                          
                                    <!-- BILLING INFO-->
        
                                    <!--CREDIT CARD INFO-->
                                    <tr>
                                       <td style="padding:40px 40px 0 0px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; font-family: Helvetica, Arial, sans-serif;">
                                            <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%" style="table-layout: auto;">';


                         if($ord_pay_type=='paypal'){
                             $strHtml.='<tr>
                                    <td style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; font-family: Helvetica, Arial, sans-serif;">
                                        <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" width="100%" style="table-layout: auto;">
    
                                            <tr>
                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px; font-weight: bold;">
                                                    PayPal Email
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 12px;">
                                                    '.$ord_details->ord_usr_data->Usr_Email.'
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px; font-weight: bold;">
                                                    Additional Purchase Info on file with PayPal
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
							    </tr>';
                         }elseif ($ord_pay_type=='na'){

                         }else{
                             $strHtml .='<!--CREDIT CARD-->
                                              <tr>
                                                    <td style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; font-family: Helvetica, Arial, sans-serif;">
                                                        <tr>
                                                            <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px; font-weight: bold;">
                                                                Cardholder Name
                                                            </td>
                                                        </tr>
                                                    <tr>
                                                        <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 12px;">
                                                            ' . $ord_details->ord_usr_data->Usr_BFName . ' ' . $ord_details->ord_usr_data->Usr_BLName . '
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px; font-weight: bold;">
                                                            Cardholder Info
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 12px;">
                                                            ' . $ord_details->ord_usr_data->Ord_CCType . ' - xxxxxxxxxxxx' . $ord_details->ord_usr_data->Ord_CCString . '
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 2px; font-weight: bold;">
                                                            Expires
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="font-family: Helvetica, Arial, sans-serif; padding-bottom: 12px;">
                                                            ' . $ord_details->ord_usr_data->Ord_CCExp . '
                                                        </td>
                                                    </tr>
                                                    </td>
                                                </tr>
                                                <!--CREDIT CARD-->';
                         }

                            $strHtml .=     '
                                            </table>
                                        </td>
                                    </tr>
                                    <!--CREDIT CARD INFO--> 
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- 1 Column Text + Button : END -->
        
                    <!-- Email Body : END -->
        
                    <!-- Email Footer : BEGIN -->
                    <table role="presentation" aria-hidden="true" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;">
                        <tr>
                            <td style="padding: 40px 10px;width: 100%; font-size: 12px; font-family: sans-serif; line-height:18px; text-align: center; color: #888888;" class="x-gmail-data-detectors">
                                <webversion style="color:#cccccc; text-decoration:underline; font-weight: bold;"><a href="http://snphp.study.net/order/receipt/web/'.$ord_id.'/'.$order_hash.'">View as a Web Page</a></webversion>
                            </td>
                        </tr>
                    </table>
                    <!-- Email Footer : END -->
        
                    <!--[if mso]>
                    </td>
                    </tr>
                    </table>
                    <![endif]-->
        
                    </div>
                </center>
            </body>
            </html>
        ';
        return $strHtml;
    }


}
