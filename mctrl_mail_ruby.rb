puts 'Enter your email address:'
cmdline = gets.chomp
addrtest = /^\w{1,30}\@\w{1,30}\.\w{2,4}$/i
if addrtest.match(cmdline)
  puts 'Address is valid.'
else
  puts 'Address is NOT valid.'
  tries = tries - 1
end