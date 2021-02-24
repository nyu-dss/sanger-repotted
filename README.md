# sanger-repotted 🌱🍯 
[![ci:deploy](https://github.com/nyu-dss/sanger-repotted/workflows/ci:deploy/badge.svg)](https://github.com/nyu-dss/sanger-repotted/actions?query=workflow%3Aci%3Adeploy)

__see:__ [nyu-dss/repotting-template](https://github.com/nyu-dss/repotting-template/)

![sanger img](https://raw.githubusercontent.com/nyu-dss/sanger-repotted/main/src/images/aboutms/mainimage.png)

## info

__site name:__  
margaret sanger papers project

__"old pot" url:__   
[nyu.edu/projects/sanger](https://nyu.edu/projects/sanger)

__"new pot" url:__  
[sanger.hosting.nyu.edu](https://sanger.hosting.nyu.edu)

__date repotted:__  
[tbd]

__notes:__
- [x] copied off i4 with httrack
- [x] converted to jekyll for smoother, centralized edits
- [x] published to [github pages](https://nyu-dss.github.io/sanger-repotted/)
- [x] automates builds, tests, and deploys to nyu web hosting via [ftp github action](https://github.com/nyu-dss/sanger-repotted/blob/main/.github/workflows/deploy.yml) (temporarily at http://marii.hosting.nyu.edu/sanger/)

## editing guide

### prerequisites
- ruby and ruby gems installed with [rvm](https://rvm.io/rvm/install)
- bundler gem (can be installed with `gem install bundler`)

### steps
- clone the repo & cd into it
- install ruby project dependencies with `bundle install`
- run the tests with `bundle exec rake test`
- make your changes. you can write in html, markdown, and/or with jekyll's templating language [liquid](https://jekyllrb.com/docs/liquid/tags/).
- serve the site with `bundle exec jekyll serve`
- add and commit your changes
- if you push to the `main` branch, it will trigger the deploy workflow. you can check on it as it runs [here](https://github.com/nyu-dss/sanger-repotted/actions?query=workflow%3Aci%3Adeploy).
- browse the prod site (currently http://marii.hosting.nyu.edu/sanger/) to see your deploy in action
