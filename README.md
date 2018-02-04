# Munki Enroll

A set of scripts to automatically enroll clients in Munki. Adapted from the original  [edingc/munki-enroll](https://github.com/edingc/munki-enroll) project.

## Why modify Munki Enroll?

For our needs, Munki Enroll was too complex. We just wanted a way to create manifests automatically, when setting up a new Mac.

We're using the "one manifest per Mac" method, and each Mac's manifest has a minimum of one more manifest nested in it. This gives us the flexibility to target groups of Macs for software deployments, but also target individual Macs.

## Installation

Simply copy the `munki-enroll` directory to the root of your Munki repository.  Be sure to edit the `enroll.php` file to add the manifests that should be nested in your Mac's manifest (which will be named to match the computer name).

In the `Scripts` directory, edit `munki_enroll.sh` to include the FQDN and repo path of your Munki server. Run it with DeployStudio, Imagr, or whatever you'd like.

## License

Munki Enroll, like the contained CFPropertyList project, is published under the [MIT License](http://www.opensource.org/licenses/mit-license.php).