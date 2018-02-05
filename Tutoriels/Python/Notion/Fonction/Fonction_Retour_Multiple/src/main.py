#================================================
def mod(a, b):
    m_quotient = a // b
    m_remainder = a % b
    m_data = (m_quotient, m_remainder)
    return m_data
#================================================
m_mod = mod(26, 7)
m_format = "mod(26, 7): {}".format(m_mod)
print m_format
#================================================
m_quotient, m_remainder = mod(26, 7)
m_format = "mod(26, 7): Q: {}, R: {}" \
.format(m_quotient, m_remainder)
print m_format
#================================================
