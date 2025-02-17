def count_trailing_zeros(n):
    count = 0
    while n % 2 == 0:
        count += 1
        n //= 2
    return count

def find_valid_char(yi_value):
    for i in range(32, 127):  # Check printable ASCII characters
        if count_trailing_zeros(i) == yi_value:
            print(f"Character: {chr(i)} (ASCII {i}) -> Binary: {bin(i)}")
            return chr(i)
    return None

yi = [0x1B, 0x26, 0x57, 0x5F, 0x76, 0x09]

# Find valid characters for each yi value
for y in yi:
    print(f"Valid character for yi={hex(y)}:")
    find_valid_char(y)
