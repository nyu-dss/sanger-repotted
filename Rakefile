require 'html-proofer'
require 'yaml'

@config  = YAML.load_file '_config.yml'
@baseurl = ENV['BASEURL'] || @config.dig('baseurl')

task :test do
  Rake::Task["reset"].invoke
  sh "bundle exec jekyll build -b '#{@baseurl}' -d '_site#{@baseurl}'"
  opts = {
    check_html: true,
    disable_external: true,
    ignore_empty_alt: true,
    ignore_missing_alt: true,
    only_4xx: true,
    ignore_urls: [/.*webedition\/app.*/]
  }
  HTMLProofer.check_directory('./_site', opts).run
end

task :reset do
  sh "rm -rf _site .jekyll*"
end

task :build do
  sh "bundle exec jekyll build -b '#{@baseurl}'"
end
